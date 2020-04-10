<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Cart;
use Faker\Generator as Faker;
use App\model\Product;
$factory->define(Cart::class, function (Faker $faker) {
    return [        
            'productId'=> function(){
                return Product::all()->random();
            },
            'quantity'=> $faker->numberBetween(1,5),
    ];
});
