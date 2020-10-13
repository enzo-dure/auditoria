<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {

    return [
        'nombre' => $faker->text,
        'apellido' => $faker->text,
        'ci' => $faker->text,
        
    ];
});
