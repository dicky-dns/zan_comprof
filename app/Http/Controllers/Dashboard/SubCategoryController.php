<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.subkategori.index');
    }

    public function datatable(Request $request)
    {
        $data = SubCategory::query()
            ->orderBy('category_id')
            ->orderBy('sequence');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('category', function ($data) {
                $cat = Category::find($data->category_id);

                return $cat ? $cat->name : '-';
            })
            ->addColumn('action', function ($data) {
                $kode = encrypt($data->id);

                $button =
                    '<a href="#" data-id="'.$kode.'" class="editbtn" data-tooltip="tooltip" title="Edit Data">
                        <i class="bx bx-edit-alt text-primary fs-5"></i>
                    </a> 
                    
                    <a href="#" data-id="'.$kode.'" class="deletebtn" data-tooltip="tooltip" title="Hapus Data">
                        <i class="bx bx-trash-alt text-danger fs-5"></i>
                    </a>';

                return $button;
            })
            ->toJson();
    }

    public function add(Request $request)
    {
        $cek = SubCategory::where('category_id', $request->category)
            ->where('name', $request->name)
            ->first();

        if ($cek) {
            return response()->json('Sub-Kategori sudah tersedia', 400);
        }

        $last = SubCategory::where('category_id', $request->category)
            ->orderBy('sequence', 'desc')
            ->first();

        $seq = 1;

        if ($last) {
            $seq = $last->sequence + 1;
        }

        $data = new SubCategory;
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->category_id = $request->category;
        $data->description = $request->description;
        $data->sequence = $seq;

        $image = $request->file('image');
        $path = 'assets/img/subcategory/';
        $filename = time().Str::random(15).'.png';
        $image->move($path, $filename);

        $data->push([
            'image' => $filename,
        ]);

        $data->image = $filename;

        $data->save();

        return response()->json('Data berhasil disimpan');
    }

    public function selectcategory(Request $request)
    {
        $data = Category::select('id', 'name');

        if ($request->q) {
            $data = $data->where('name', 'like', "%$request->q%");
        }
        $data = $data->paginate(15, $request->page);

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $data = SubCategory::find($request->update_id);

        if ($data) {
            $cek = SubCategory::where('category_id', $request->category)
                ->where('name', $request->name)
                ->whereNot('id', $request->update_id)
                ->first();

            if ($cek) {
                return response()->json('Sub-Kategori sudah tersedia', 400);
            }

            $data->name = $request->name;
            $data->slug = Str::slug($request->name);
            $data->category_id = $request->category;
            $data->description = $request->description;

            if ($request->hasFile('image')) {
                $path = 'assets/img/subcategory/';
                if ($data->image && file_exists(public_path($path.$data->image))) {
                    unlink(public_path($path.$data->image));
                }
                $fileName = time().Str::random(15).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path($path), $fileName);
                $data->image = $fileName;
            }

            $data->save();

            return response()->json('Data berhasil disimpan');
        }

        return response()->json('Gagal mengubah data', 400);
    }

    public function delete($id)
    {
        $de = decrypt($id);
        $data = SubCategory::find($de);

        if ($data) {
            $cek = Product::where('subcategory_id', $data->id)
                ->first();

            if ($cek) {
                return response()->json('Gagal menghapus data, sub-kategori sudah digunakan di produk', 400);
            }

            $path = 'assets/img/subcategory/';
            if ($data->image && file_exists(public_path($path.$data->image))) {
                unlink(public_path($path.$data->image));
            }

            $data->delete();

            return response()->json('Berhasil menghapus data');
        }

        return response()->json('Gagal menghapus data', 400);
    }
}
