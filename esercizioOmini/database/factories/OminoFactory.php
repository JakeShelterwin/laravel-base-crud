<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
        "firstName"    => $faker -> firstName(),
        "lastName" => $faker -> lastName(),
        "address"  => $faker -> address(),
        "code"      => $faker -> postcode(),
        "state"    => $faker -> state(),
        "phoneNumber" => $faker -> tollFreePhoneNumber(),
        "role" => $faker -> jobTitle()

    ];
});
