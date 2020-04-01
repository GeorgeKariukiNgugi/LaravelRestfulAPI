<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\model\Review', 'productId', 'id');
    }
}
