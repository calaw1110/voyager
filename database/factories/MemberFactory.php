<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        //
        'Username' => $faker->username,
        'Pwd' => $faker->password,
        'Email' => $faker->email,
        'SignUpDate' => '2020-05-18',
        'Nickname' => $faker->name,
        'Intro' => $faker->paragraph,
    ];
});
