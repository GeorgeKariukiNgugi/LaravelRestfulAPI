<?php

namespace App\Http\Resources\Cart;

use Illuminate\Http\Resources\Json\Resource;

class cartResource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=> $this->product->name,
            'quantity' => $this->quantity,
            'price'=> $this->product->price,
        ];
    }
}
