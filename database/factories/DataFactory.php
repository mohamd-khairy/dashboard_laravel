<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use App\Models\Sponser;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' =>  $faker->email,
        'mobile' =>  $faker->numberBetween(105106461, 9998999999999),
        'message' => $faker->text,
    ];
});

