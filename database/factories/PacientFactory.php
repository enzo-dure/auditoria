<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pacient;
use Faker\Generator as Faker;

$factory->define(Pacient::class, function (Faker $faker) {

    return [
        'nombre_apellido' => $faker->text,
        'genero' => $faker->text,
        'fechanac' => $faker->text,
        'edad' => $faker->randomDigitNotNull,
        'ci' => $faker->randomDigitNotNull,
        'barrio' => $faker->text,
        'telefono' => $faker->text,
        'grupo_sanguineo' => $faker->text,
        'enfermedad_referencial' => $faker->text,
        'tipo_prueba' => $faker->text,
        'resultado' => $faker->text,
        'email' => $faker->text,
        'latitud' => $faker->text,
        'longitud' => $faker->text,
        'usuario_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
