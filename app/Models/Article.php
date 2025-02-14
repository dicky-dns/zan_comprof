<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function save(array $options = [])
    {
        $this->user_id = session('user')->id ?? null;

        return parent::save($options);
    }
}
