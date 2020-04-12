<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    //! this section of the code is used to add the fillable fields of the API. 

    protected $guarded = ['id','created_at','updated_at'];
    public function products()
    {
        return $this->belongsTo('App\model\Product', 'productId', 'id');
    }
}
