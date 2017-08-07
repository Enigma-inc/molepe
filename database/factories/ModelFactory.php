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

$factory->define(App\AssetClass::class, function ($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10)
    ];
});

$factory->define(App\AssetSubclass::class,function ($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10),
        'asset_class_id' => factory(App\AssetClass::class)->create()->id,

    ];
});

$factory->define(App\Location::class, function ($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10)
    ];
});
$factory->define(App\Zone::class, function ($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10)
    ];
});
$factory->define(App\AssetGroup::class, function ($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10)
    ];
});
$factory->define(App\Coordinates::class, function ($faker) {
    return [
        'longitude' => $faker->longitude(),
        'latitude' => $faker->latitude()
    ];
});

$factory->define(App\Asset::class,function ($faker) {
    return [
        'asset_number'=>$faker->ean13,
        'description'=>$faker->sentence(10),
        'dimensions'=>$faker->sentence(4),
        'construction'=>$faker->sentence(3),
        'specific_identifiers'=>$faker->word,
        'class_id'=>factory(App\AssetSubclass::class)->create()->id,
        'location_id'=>factory(App\Location::class)->create()->id,
        'zone_id'=>factory(App\Zone::class)->create()->id

    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
