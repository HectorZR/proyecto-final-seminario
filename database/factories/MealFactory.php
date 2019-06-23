<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text(100),
        'chef_name' => $faker->name(),
        'url_image' => $faker->imageUrl(200, 200, 'food'),
    ];
});
