<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'firstname' =>$faker->firstname,
        'lastname' =>$faker->lastname,
        'email' =>$faker->email,
        'address' =>$faker->address,
        'student_id' =>App\User::all()->random()->id
    ];
});
