<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    protected $table = 'client_reviews';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
