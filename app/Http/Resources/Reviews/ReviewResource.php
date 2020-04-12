<?php

namespace App\Http\Resources\Reviews;

use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
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
            'id'=>$this->id,
            'review'=> $this->review,
            'customerName' =>$this->customerName,
            'star'=> $this->star,
        ];
    }
}
