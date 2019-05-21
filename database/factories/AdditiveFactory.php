<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Additive;
use Faker\Generator as Faker;

$factory->define(Additive::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
