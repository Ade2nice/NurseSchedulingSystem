<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RegisterNurse;
use Faker\Generator as Faker;

$factory->define(App\RegisterNurse::class, function (Faker $faker) {
    return ['email' => 'Nurse' . $faker->randomNumber(5, true),
    'phone' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        //
    ];
});
