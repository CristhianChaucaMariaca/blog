<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'excerpt'   => $faker->sentence(20),
        'description' => $faker->text(200),
        'price' => $faker->buildingNumber,
        'offer' => rand(10,30),
        'status' => $faker->randomElement(['DRAFT','PUBLISHED'])
    ];
});
