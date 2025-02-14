<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.kategori.index');
    }

    public function datatable(Request $request)
    {
        $data = Category::query()
            ->orderBy('sequence');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('desc', function ($data) {
                if (strlen($data->description) > 100) {
                    $desc = substr($data->description, 0, 100).'...';
                } else {
                    $desc = $data->description;
                }

                return strip_tags($desc);
            })
            ->addColumn('action', function ($data) {
                $kode = encrypt($data->id);

                $button =
                    '<a href="'.route('dashboard_kategori_edit', $data->id).'" class="editbtn" data-tooltip="tooltip" title="Edit Data">
                        <i class="bx bx-edit-alt text-primary fs-5"></i>
                    </a> 
                    
                    <a href="#" data-id="'.$kode.'" class="deletebtn" data-tooltip="tooltip" title="Hapus Data">
                        <i class="bx bx-trash-alt text-danger fs-5"></i>
                    </a>';

                return $button;
            })
            ->escapeColumns('desc')
            ->toJson();
    }

    public function tambah()
    {
        return view('dashboard.kategori.form');
    }

    public function add(Request $request)
    {
        $cek = Category::where('name', $request->name)->first();

        if ($cek) {
            return redirect()->back()->with('error', 'Kategori sudah ada');
        }

        $dataimages = collect();

        // foreach ($request->file('card_img') as $img) {
        //     $image = $img;
        //     $path = 'assets/img/category/';
        //     $filenamecard = time().Str::random(15).'.png';
        //     $image->move($path, $filenamecard);

        //     $dataimages->push([
        //         'type' => 'card',
        //         'image' => $filenamecard,
        //     ]);
        // }

        $image = $request->file('cover_img');
        $path = 'assets/img/category/';
        $filenamecover = time().Str::random(15).'.png';
        $image->move($path, $filenamecover);

        $dataimages->push([
            'type' => 'cover',
            'image' => $filenamecover,
        ]);

        $image = $request->file('banner_img');
        $path = 'assets/img/category/';
        $filenamebanner = time().Str::random(15).'.png';
        $image->move($path, $filenamebanner);

        $dataimages->push([
            'type' => 'banner',
            'image' => $filenamebanner,
        ]);

        $seq = Category::orderBy('sequence', 'desc')->first();

        $data = new Category;
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->description = $request->description;
        $data->sequence = $seq ? $seq->sequence + 1 : 1;
        $data->save();

        foreach ($dataimages as $di) {
            $cat_image = new CategoryImage;
            $cat_image->category_id = $data->id;
            $cat_image->type = $di['type'];
            $cat_image->image = $di['image'];
            $cat_image->save();
        }

        return redirect()->route('dashboard_kategori')->with('message', 'Berhasil menyimpan data');
    }

    public function edit($id)
    {
        $data = Category::with('image')->find($id);

        if (! $data) {
            abort(404);
        }

        return view('dashboard.kategori.form', [
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {
        $data = Category::find($request->update_id);

        if ($data) {
            $cek = Category::where('name', $request->name)
                ->whereNot('id', $data->id)
                ->first();

            if ($cek) {
                return redirect()->back()->with('error', 'Kategori sudah ada');
            }

            // if ($request->has('updatecard') && 1 == $request->updatecard) {
            //     $datacard = CategoryImage::where('category_id', $data->id)
            //         ->where('type', 'card')
            //         ->get();

            //     $path = 'assets/img/category/';

            //     foreach ($datacard as $dcard) {
            //         $old_image = $path.$dcard->image;

            //         if (file_exists($old_image)) {
            //             @unlink($old_image);
            //         }
            //         $dcard->delete();
            //     }
            //     foreach ($request->file('card_img') as $img) {
            //         $image = $img;
            //         $filenamecard = time().Str::random(15).'.png';
            //         $image->move($path, $filenamecard);

            //         $newcard = new CategoryImage;
            //         $newcard->category_id = $data->id;
            //         $newcard->type = 'card';
            //         $newcard->image = $filenamecard;
            //         $newcard->save();
            //     }
            // }

            if ($request->has('updatecover') && 1 == $request->updatecover) {
                $datacover = CategoryImage::where('category_id', $data->id)
                    ->where('type', 'cover')
                    ->first();

                $path = 'assets/img/category/';

                $old_image2 = $path.$datacover->image;

                if (file_exists($old_image2)) {
                    @unlink($old_image2);
                }
                $datacover->delete();

                $image = $request->file('cover_img');
                $filenamecover = time().Str::random(15).'.png';
                $image->move($path, $filenamecover);

                $newcard = new CategoryImage;
                $newcard->category_id = $data->id;
                $newcard->type = 'cover';
                $newcard->image = $filenamecover;
                $newcard->save();
            }

            if ($request->has('updatebanner') && 1 == $request->updatebanner) {
                $databanner = CategoryImage::where('category_id', $data->id)
                    ->where('type', 'banner')
                    ->first();

                $path = 'assets/img/category/';

                $old_image3 = $path.$databanner->image;

                if (file_exists($old_image3)) {
                    @unlink($old_image3);
                }
                $databanner->delete();

                $image = $request->file('banner_img');
                $filenamecover = time().Str::random(15).'.png';
                $image->move($path, $filenamecover);

                $newcard = new CategoryImage;
                $newcard->category_id = $data->id;
                $newcard->type = 'banner';
                $newcard->image = $filenamecover;
                $newcard->save();
            }

            $data->name = $request->name;
            $data->slug = Str::slug($request->name);
            $data->description = $request->description;
            $data->save();

            return redirect()->route('dashboard_kategori')->with('message', 'Berhasil menyimpan data');
        }

        return redirect()->back()->with('error', 'Gagal menyimpan data');
    }

    public function delete($id)
    {
        $de = decrypt($id);
        $data = Category::find($de);

        if ($data) {
            $images = CategoryImage::where('category_id', $data->id)
                ->get();

            foreach ($images as $img) {
                $path = 'assets/img/category/';
                $old_image = $path.$img->image;

                if (file_exists($old_image)) {
                    @unlink($old_image);
                }
                $img->delete();
            }

            $data->delete();

            return response()->json('Berhasil menghapus data');
        }

        return response()->json('Gagal menghapus data', 400);
    }
}
