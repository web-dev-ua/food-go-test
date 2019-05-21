<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\ProductSizes;
use Faker\Generator as Faker;

$factory->define(ProductSizes::class, function (Faker $faker) {
    return [
        'name'  => $faker->word,
        'price' => $faker->numberBetween(1000, 10000),
    ];
});
