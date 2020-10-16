<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(User::class, function (Faker $faker) {
        return [
            'username'=> $faker->userName,
            'name' => $faker->name,
            'avatar'=> $faker->imageUrl('200', '200'),
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    });

