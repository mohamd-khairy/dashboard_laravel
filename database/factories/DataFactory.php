<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\About;
use App\Models\Car;
use App\Models\CarHistory;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use App\Models\Sponser;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

use Faker\Factory as FakerFactory;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'       => bcrypt('password'),
        'remember_token' => Str::random(60),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'images/fake.jpg',
        'description' => $faker->text,
        'price' =>  $faker->numberBetween(10, 500),
        'category_id' =>  Category::first() ? Category::first()->id : null,
    ];
});


$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'images/fake.jpg',
        'description' => $faker->text,
        'price' =>  $faker->numberBetween(10, 500),
        'category_id' =>  Category::first() ? Category::first()->id : null,
    ];
});

$factory->define(Sponser::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'images/fake.jpg',
    ];
});

$factory->define(About::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
    ];
});

$faker = FakerFactory::create('ar_SA'); // Set the locale to Arabic (Saudi Arabia)

$factory->define(Car::class, function () use($faker) {
    return [
        'police_number' => $faker->numberBetween(105106461, 9998999999999),
        'brand' => $faker->name,
        'model' => $faker->numberBetween(1990, 2023),
        'meter' => $faker->numberBetween(111111, 1000000000),
        'rank' => $faker->name,
        'user_name' => $faker->name,
        'work_place' => $faker->name,
    ];
});

$faker = FakerFactory::create('ar_SA'); // Set the locale to Arabic (Saudi Arabia)

$factory->define(CarHistory::class, function () use($faker) {
    return [
        'details' => $faker->text,
        'date' => $faker->date,
        'car_id' => $faker->numberBetween(1, 200),
    ];
});
