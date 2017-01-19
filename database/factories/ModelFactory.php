<?php

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
//      ACL Module
// ------------------------------------------------------------------------------

$factory->define(Czim\CmsAuth\Sentinel\Users\EloquentUser::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email'      => $faker->unique()->safeEmail,
        'password'   => $password ?: $password = bcrypt('secret'),
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
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

// ------------------------------------------------------------------------------
//      Special
// ------------------------------------------------------------------------------

$factory->define(App\Models\Example::class, function (Faker\Generator $faker) {
    return [
        'string'       => $faker->sentence,
        'short_string' => $faker->randomAscii . $faker->randomAscii . $faker->randomAscii . $faker->randomAscii,
        'text'         => implode("\n", $faker->paragraphs(rand(2, 4))),
        'richtext'     => '<h2>' . $faker->sentence . '</h2><p>' . $faker->paragraph . '</p>',
        'boolean'      => $faker->boolean,
        'integer'      => $faker->numberBetween(0, 1000),
        'decimal'      => $faker->randomFloat(2, 0, 999),
        'enum'         => $faker->randomElement([ 'alpha', 'beta', 'gamma', 'omega', null ]),
        'date'         => $faker->date(),
        'datetime'     => $faker->dateTime,
        'color'        => $faker->hexColor,
        'location'     => $faker->country . ', ' . $faker->city,
        'latitude'     => $faker->latitude,
        'longitude'    => $faker->longitude,
    ];
});
