<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductsCollectionResource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name'=> $this->name,
            'totalPrice' => round((1-$this->discount/100)*$this->price,2),
            'star'=> round(($this->reviews->sum('star'))/($this->reviews->count())),
            'productDetail' =>[
                'href' => route('products.show',$this->id),
            ]
        ];
    }
}