<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.artikel.index');
    }

    public function datatable(Request $request)
    {
        $data = Article::query();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('judul', function ($data) {
                if (strlen($data->title) > 50) {
                    $judul = substr($data->title, 0, 50).'...';
                } else {
                    $judul = $data->title;
                }

                return $judul;
            })
            ->addColumn('status', function ($data) {
                $status = $data->published ? 'Publish' : 'Draft';

                return $status;
            })
            ->addColumn('user', function ($data) {
                $dt = User::withTrashed()->find($data->user_id);

                $user = $dt ? $dt->name : '-';

                return $user;
            })
            ->addColumn('updater', function ($data) {
                $dt = User::withTrashed()->find($data->last_updater);

                $user = $dt ? $dt->name : '-';

                return $user;
            })
            ->addColumn('action', function ($data) {
                $kode = encrypt($data->id);

                $button =
                    '<a href="'.route('dashboard_artikel_edit', $data->id).'" class="editbtn" data-tooltip="tooltip" title="Edit Data">
                        <i class="bx bx-edit-alt text-primary fs-5"></i>
                    </a> 
                    
                    <a href="#" data-id="'.$kode.'" class="deletebtn" data-tooltip="tooltip" title="Hapus Data">
                        <i class="bx bx-trash-alt text-danger fs-5"></i>
                    </a>';

                return $button;
            })
            ->toJson();
    }

    public function tambah()
    {
        return view('dashboard.artikel.form');
    }

    public function add(Request $request)
    {
        $cek = Article::where('slug', $request->slug)->first();

        if ($cek) {
            return redirect()->back()->with('error', 'Slug sudah digunakan');
        }

        $image = $request->file('cover');
        $path = 'assets/img/article/';
        $filename = time().Str::random(15).'.png';
        $image->move($path, $filename);

        $data = new Article;
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->title = $request->title;
        $data->post_date = $request->post_date;
        $data->content = $request->content;
        $data->cover = $filename;
        $data->published = $request->published;
        $data->user_id = session('user')->id;
        $data->last_updater = session('user')->id;
        $data->save();

        return redirect()->route('dashboard_artikel')->with('message', 'Berhasil menyimpan data');
    }

    public function edit($id)
    {
        $data = Article::find($id);

        if (! $data) {
            abort(404);
        }

        return view('dashboard.artikel.form', [
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {
        $data = Article::find($request->update_id);

        if ($data) {
            $cek = Article::where('slug', $request->slug)
                ->whereNot('id', $data->id)
                ->first();

            if ($cek) {
                return redirect()->back()->with('error', 'Slug sudah digunakan');
            }

            if ($request->has('updatecover') && '1' == $request->updatecover) {
                $image = $request->file('cover');
                $path = 'assets/img/article/';
                $filename = time().Str::random(15).'.png';
                $image->move($path, $filename);

                $old_image = $path.$data->cover;

                if (file_exists($old_image)) {
                    @unlink($old_image);
                }
            } else {
                $filename = $data->cover;
            }

            $data->title = $request->title;
            $data->slug = $request->slug;
            $data->title = $request->title;
            $data->post_date = $request->post_date;
            $data->content = $request->content;
            $data->cover = $filename;
            $data->published = $request->published;
            $data->last_updater = session('user')->id;
            $data->save();

            return redirect()->route('dashboard_artikel')->with('message', 'Berhasil menyimpan data');
        }

        return redirect()->back()->with('error', 'Gagal menyimpan data');
    }

    public function delete($id)
    {
        $de = decrypt($id);
        $data = Article::find($de);

        if ($data) {
            $path = 'assets/img/article/';
            $old_image = $path.$data->cover;

            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $data->delete();

            return response()->json('Berhasil menghapus data');
        }

        return response()->json('Gagal menghapus data', 400);
    }
}
