<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Exports\ProductTemplateExport;
use App\Http\Controllers\Controller;
use App\Imports\ProductImport;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.produk.index');
    }

    public function datatable(Request $request)
    {
        $data = Product::query()
            ->orderBy('id', 'desc');

        if ($request->has('category') && null != $request->category) {
            $sub = SubCategory::select('id')
                ->where('category_id', $request->category)
                ->get();

            $data->whereIn('subcategory_id', $sub->pluck('id'));
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('desc', function ($data) {
                $description = $data->description ?? '';
                $desc = strlen($description) > 100
                    ? substr($description, 0, 100).'...'
                    : $description;

                return strip_tags($desc);
            })
            ->addColumn('subcategory', function ($data) {
                $sub = SubCategory::find($data->subcategory_id);

                return $sub ? $sub->name : '-';
            })
            ->addColumn('category', function ($data) {
                $sub = SubCategory::find($data->subcategory_id);

                if (! $sub) {
                    return '-';
                }

                $cat = Category::find($sub->category_id);

                return $cat ? $cat->name : '-';
            })
            ->addColumn('action', function ($data) {
                $kode = encrypt($data->id);

                $button =
                    '<a href="'.route('dashboard_produk_edit', $data->id).'" class="editbtn" data-tooltip="tooltip" title="Edit Data">
                        <i class="bx bx-edit-alt text-primary fs-5"></i>
                    </a> 
                    
                    <a href="#" data-id="'.$kode.'" class="deletebtn" data-tooltip="tooltip" title="Hapus Data">
                        <i class="bx bx-trash-alt text-danger fs-5"></i>
                    </a>';

                return $button;
            })
            ->addColumn('view', function ($data) {
                $button =
                    '<a href="'.route('produkdetail', $data->slug).'" target="_blank" class="viewbtn" data-tooltip="tooltip" title="View Data">
                        <i class="bx bx-show-alt text-dark fs-5"></i>
                    </a>';

                return $button;
            })
            ->escapeColumns('desc')
            ->toJson();
    }

    public function tambah()
    {
        return view('dashboard.produk.form');
    }

    public function add(Request $request)
    {
        $cek = Product::where('name', $request->name)
            ->where('subcategory_id', $request->subcategory_id)
            ->first();

        if ($cek) {
            return redirect()->back()->with('error', 'Produk sudah ada');
        }

        $subcategory_id = $request->has('subcategory_id') && null != $request->subcategory_id ? $request->subcategory_id : null;

        $data = new Product;
        $data->name = $request->name;
        // $data->description = $request->description;
        $data->specification = $request->specification;
        $data->slug = Str::slug($request->name);
        $data->category_id = $request->category_id;
        $data->subcategory_id = $subcategory_id;
        $data->ingredients = $request->ingredients ?? null;
        $data->benefits = $request->benefits ?? null;
        $data->effects = $request->effects ?? null;
        $data->how_to_use = $request->how_to_use ?? null;
        $data->is_active = $request->has('is_active') && '1' == $request->is_active ? true : false;
        $data->save();

        foreach ($request->file('images') as $img) {
            $image = $img;
            $path = 'assets/img/product/';
            $filename = time().Str::random(15).'.png';
            $image->move($path, $filename);

            $product_image = new ProductImage;
            $product_image->product_id = $data->id;
            $product_image->image = $filename;
            $product_image->save();
        }

        return redirect()->route('dashboard_produk')->with('message', 'Berhasil menyimpan data');
    }

    public function edit($id)
    {
        $data = Product::with('image')->find($id);

        if (! $data) {
            abort(404);
        }
        $sub = SubCategory::find($data->subcategory_id);

        $cat = Category::find($sub->category_id);

        $data->subcategory = $sub->name;
        $data->category_id = $cat->id;
        $data->category = $cat->name;

        return view('dashboard.produk.form', [
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {
        $data = product::find($request->update_id);
        if ($data) {
            $cek = Product::where('name', $request->name)
                ->where('subcategory_id', $request->subcategory_id)
                ->whereNot('id', $data->id)
                ->first();

            if ($cek) {
                return redirect()->back()->with('error', 'Produk sudah ada');
            }

            if ($request->has('updateimage') && 1 == $request->updateimage) {
                $dataimg = ProductImage::where('product_id', $data->id)
                    ->get();

                $path = 'assets/img/product/';

                foreach ($dataimg as $di) {
                    $old_image = $path.$di->image;

                    if (file_exists($old_image)) {
                        @unlink($old_image);
                    }
                    $di->delete();
                }
                foreach ($request->file('images') as $dimg) {
                    $image = $dimg;
                    $filename = time().Str::random(15).'.png';
                    $image->move($path, $filename);

                    $newcard = new ProductImage;
                    $newcard->product_id = $data->id;
                    $newcard->image = $filename;
                    $newcard->save();
                }
            }

            $subcategory_id = $request->has('subcategory_id') && null != $request->subcategory_id ? $request->subcategory_id : null;

            $data->name = $request->name;
            $data->slug = Str::slug($request->name);
            $data->category_id = $request->category_id;
            $data->subcategory_id = $subcategory_id;
            // $data->description = $request->description;
            $data->specification = $request->specification;
            $data->ingredients = $request->ingredients ?? null;
            $data->benefits = $request->benefits ?? null;
            $data->effects = $request->effects ?? null;
            $data->how_to_use = $request->how_to_use ?? null;
            $data->is_active = $request->has('is_active') && '1' == $request->is_active ? true : false;
            $data->save();

            return redirect()->route('dashboard_produk')->with('message', 'Berhasil menyimpan data');
        }

        return redirect()->back()->with('error', 'Gagal menyimpan data');
    }

    public function delete($id)
    {
        $de = decrypt($id);
        $data = Product::find($de);

        if ($data) {
            $images = ProductImage::where('product_id', $data->id)
                ->get();

            foreach ($images as $img) {
                $path = 'assets/img/product/';
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

    public function selectsubcategory(Request $request)
    {
        $data = SubCategory::select('id', 'name')
            ->where('category_id', $request->category);

        if ($request->q) {
            $data = $data->where('name', 'like', "%$request->q%");
        }
        $data = $data->paginate(15, $request->page);

        return response()->json($data);
    }

    public function exportTemplate()
    {
        return Excel::download(new ProductTemplateExport, 'product_template.xlsx');
    }

    public function importProduk(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,xlsx,xls',
        ]);

        try {
            Excel::import(new ProductImport, $request->file('file'));

            return redirect()->back()->with('message', 'Produk berhasil diimport');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengimpor produk: '.$e->getMessage());
        }
    }
}
