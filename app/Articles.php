<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function scopeSearch($query, $s) {
        $count = Articles::count();

        return $query->where('title', 'like', '%' .$s. '%')
            ->orWhere('slug', 'like', '%' .$s. '%')
            ->orWhere('body', 'like', '%' .$s. '%');

    }
}
