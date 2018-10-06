<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product' => $faker->word,
        'model' => $faker->word,
        'serie' => $faker->word,
        'measure' => $faker->word,
        'price' => rand(100, 10000)
    ];
});
