<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id')->orderBy('sequence');
    }

    public function image()
    {
        return $this->hasMany(CategoryImage::class, 'category_id', 'id');
    }
}
