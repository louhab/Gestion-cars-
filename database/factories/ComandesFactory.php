<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comandes;
use Faker\Generator as Faker;

$factory->define(Comandes::class, function (Faker $faker) {
    return [
        //
        'user_id' =>App\User::pluck('id')->random(),
        'car_id' =>App\Car::pluck('id')->random(),
        'dateL' =>$faker->dateTime(),
        'dateR' =>$faker->dateTime(),
        'prixttc' =>$faker->randomDigit(1000,5000),
        'text' =>$faker->text(300), 

    ];
});
