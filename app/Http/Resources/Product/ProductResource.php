<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name'=> $this->name,
            'description' =>$this->description,
            'price'=>$this->price,
            'discount'=>$this->discount,
            'star'=> $this->reviews->count() == 0 ? 'There are no reviews yet.': round(($this->reviews->sum('star'))/($this->reviews->count())),
            'stock'=>$this->stock == 0? 'Product Out Of Stock': $this->stock,
            'totalPrice' => round((1-$this->discount/100)*$this->price,2),
            'reviews' => [
                'href'=> route('review.index',$this->id),
            ],
        ];
    }
}
