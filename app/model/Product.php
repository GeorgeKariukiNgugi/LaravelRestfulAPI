<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //! defining the fillable fields of the API. 

    protected $guarded = ['id','updated_at','created_at'];

    public function reviews()
    {
        return $this->hasMany('App\model\Review', 'productId', 'id');
    }
}
