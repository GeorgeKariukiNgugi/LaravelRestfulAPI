<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Review;
use Faker\Generator as Faker;
use App\model\Product;
$factory->define(Review::class, function (Faker $faker) {
    return [
        'productId'=> function(){
            return Product::all()->random();
        },
        'review'=>$faker->paragraph,
        'customerName'=>$faker->name,
        'star'=>$faker->numberBetween(0,5),
    ];
});
