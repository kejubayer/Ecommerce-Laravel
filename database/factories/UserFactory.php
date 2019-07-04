<?php

use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->realText(50);

    return [
        'category_id' => random_int(1, 4),
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->realText(),
        'price' => random_int(100, 10000)
    ];
});
