<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'foreign_id'    => $faker->unique()->randomNumber(),
        'client_id'     => $faker->randomDigit,
        'name'          => $faker->word,
        'descr'         => $faker->sentence,
        'price'         => $faker->numberBetween(1000, 10000),
        'popular'       => $faker->randomDigit,
    ];
});
