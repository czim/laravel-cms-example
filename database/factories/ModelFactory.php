<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// ------------------------------------------------------------------------------
//      Product Catalog
// ------------------------------------------------------------------------------

$factory->define(App\Models\Brand::class, function (Faker\Generator $faker) {
    return [
        'name'        => ucfirst($faker->bs),
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'slug'        => $faker->unique()->slug,
        'name'        => ucfirst($faker->bs),
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'model_name' => implode(' ', $faker->words(3)) . ' ' . $faker->randomNumber(3),
        'price'      => $faker->randomFloat(2, 0, 999),
        'sale'       => $faker->boolean,
        'special'    => $faker->randomElement(['holiday', 'custom', 'miniature', 'test']),
        'en' => [
            'title'            => $faker->sentence,
            'description'      => $faker->paragraph,
            'description_long' => implode("\n", $faker->paragraphs),
        ],
        'nl' => [
            'title'            => $faker->sentence,
            'description'      => $faker->paragraph,
            'description_long' => implode("\n", $faker->paragraphs),
        ],
    ];
});

$factory->define(App\Models\Variant::class, function (Faker\Generator $faker) {
    return [
        'name'  => implode(' ', $faker->words(3)) . ' ' . $faker->randomNumber(3),
        'price' => $faker->randomFloat(2, 0, 999),
    ];
});


