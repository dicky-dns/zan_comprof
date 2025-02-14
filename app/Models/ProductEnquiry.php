<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductEnquiry extends Model
{
    protected $table = 'product_enquiries';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
