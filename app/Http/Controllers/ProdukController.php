<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
use App\Models\ProductEnquiry;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(16);

        return view('product.index', [
            'products' => $products,
        ]);
    }

    public function detail($slug)
    {
        $product = Product::with('image', 'subcategory', 'category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        if (! $product) {
            abort(404);
        }

        $product->viewer = $product->viewer + 1;
        $product->save();

        $recommendations = Product::orderBy('viewer', 'desc')
            ->where('is_active', true)
            ->take(4)
            ->get();

        $productDetails = [
            [
                'title' => 'Ingredients',
                'content' => $product->ingredients,
            ],
            [
                'title' => 'Manfaat',
                'content' => $product->benefits,
            ],
            [
                'title' => 'Efek',
                'content' => $product->effects,
            ],
            [
                'title' => 'Cara Pemakaian',
                'content' => $product->how_to_use,
            ],
        ];

        $imageIndex = 1;

        return view('product.detail', [
            'product' => $product,
            'recommendations' => $recommendations,
            'productDetails' => $productDetails,
            'imageIndex' => $imageIndex,
        ]);
    }

    public function kategori($slug, Request $request)
    {
        $category = Category::with('image')
            ->where('slug', $slug)
            ->first();

        if (! $category) {
            abort(404);
        }

        $products = Product::where('category_id', $category->id)
            ->where('is_active', true)
            ->orderBy('id', 'desc')
            ->paginate(16);

        return view('product.category', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function subkategori($slug)
    {
        $subcategory = SubCategory::where('slug', $slug)
            ->first();

        if (! $subcategory) {
            abort(404);
        }

        $faqs = Faq::latest()->get();

        $category = Category::with('image')
            ->where('id', $subcategory->category_id)
            ->first();

        $products = Product::where('subcategory_id', $subcategory->id)
            ->where('is_active', true)
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('product.subcategory', [
            'category' => $category,
            'subcategory' => $subcategory,
            'products' => $products,
            'faqs' => $faqs,
        ]);
    }

    public function listSubKategori($slug, Request $request)
    {
        $subcategory = SubCategory::with('category.image')->where('slug', $slug)->first();
        $category = Category::where('id', $subcategory->category_id)->first();

        if (! $subcategory) {
            abort(404);
        }

        $products = Product::where('subcategory_id', $subcategory->id)
            ->where('is_active', true)
            ->orderBy('id', 'desc')
            ->paginate(16);

        return view('product.list-subcategory', [
            'subcategory' => $subcategory,
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function addEnquiryMessage(Request $request)
    {
        $data = new ProductEnquiry;
        $data->product_id = $request->product_id;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();

        $data->type = 'enquiry';
        $product = Product::find($request->product_id);
        $data->product = $product->name;
        SendMailController::sendmail($data);

        return response()->json('Pesan berhasil dikirim');
    }
}
