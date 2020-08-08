<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\service;
use Faker\Generator as Faker;

$factory->define(service::class, function (Faker $faker) {
    return [
        'name'          => $faker->unique()->sentence(4),
        'excerpt'       => $faker->text(200),//Añadido posterirormente con una migracion
        'description'   => $faker->text(500),
        'status'        => $faker->randomElement(['DRAFT','PUBLISHED'])//Añadido posterirormente con una migracion
    ];
});
