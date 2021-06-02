<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname'=> $faker -> firstname,
      'lastname'=> $faker -> lastname,
      'ral'=> $faker -> numberBetween(1000,3000)
    ];
});
