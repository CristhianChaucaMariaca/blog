<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'service_id' => rand(1,5),
        'name' => $faker->sentence(4),
        'description' => $faker->text(200),
        'link' => $faker->url,
        'status' => $faker->randomElement(['DRAFT','PUBLISHED'])
    ];
});
