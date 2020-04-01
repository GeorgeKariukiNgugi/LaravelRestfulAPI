<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function products()
    {
        return $this->belongsTo('App\model\Product', 'productId', 'id');
    }
}
