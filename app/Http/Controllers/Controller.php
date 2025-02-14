<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $kategoriall = Category::with('subcategory')
            ->orderBy('sequence')
            ->get();

        $selectedkategori = Category::with('subcategory')
            ->where('is_select', 1)
            ->orderBy('sequence')
            ->get();

        View::share([
            'kategoriall' => $kategoriall,
            'selectedkategori' => $selectedkategori,
            'ctrl' => $this,
        ]);
    }

    public function getsubcategory($id)
    {
        return SubCategory::where('category_id', $id)
            ->orderBy('sequence')
            ->get();
    }

    public function getcategory($id)
    {
        return Category::with('subcategory')->find($id);
    }
}
