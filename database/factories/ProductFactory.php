<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'description'=>$faker->paragraph,
        'price'=>$faker->numberBetween(10,1000),
        'discount'=>$faker->numberBetween(1,10),
        'stock'=>$faker->randomDigit
    ];
});
