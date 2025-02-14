<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaklonStep extends Model
{
    protected $table = 'maklon_steps';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
