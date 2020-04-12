<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    
    public function product()
    {
        return $this->belongsTo('App\model\Product', 'productId', 'id');
    }
}
