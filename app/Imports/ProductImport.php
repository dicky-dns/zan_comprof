<?php

declare(strict_types=1);

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        $headerSkipped = false;

        foreach ($collection as $row) {
            if (! $headerSkipped) {
                $headerSkipped = true;

                continue;
            }

            if (empty($row[0])) {
                continue;
            }

            $category = Category::firstWhere('name', $row[1]);
            $subcategory = SubCategory::firstWhere('name', $row[2]);

            Product::updateOrCreate(
                [
                    'name' => $row[0],
                ],
                [
                    'category_id' => $category ? $category->id : null,
                    'subcategory_id' => $subcategory ? $subcategory->id : null,
                    'specification' => $row[3],
                    'slug' => Str::slug($row[0]),
                    'ingredients' => $row[4] ?? null,
                    'benefits' => $row[5] ?? null,
                    'effects' => $row[6] ?? null,
                    'how_to_use' => $row[7] ?? null,
                ]
            );
        }
    }
}
