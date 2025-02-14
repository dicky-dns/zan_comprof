<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tradeshow extends Model
{
    protected $table = 'tradeshows';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
