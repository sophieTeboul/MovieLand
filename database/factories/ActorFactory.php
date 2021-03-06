<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Actor::class, function (Faker $faker) {
    return [
        'act_fname' => $faker->firstName,
        'act_lname' => $faker->lastName
    ];
});
