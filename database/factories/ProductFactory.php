<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'description' => $faker->text(200),
        'price' => $faker->buildingNumber,
        'offer' => $faker->randomElement([true,false]),
        'status' => $faker->randomElement(['DRAFT','PUBLISHED'])
    ];
});
