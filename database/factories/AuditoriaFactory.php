<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Auditoria;
use Faker\Generator as Faker;

$factory->define(Auditoria::class, function (Faker $faker) {

    return [
        'usuario' => $faker->word,
        'operacion' => $faker->text,
        'tabla_nombre' => $faker->text,
        'fecha_de_operacion' => $faker->text,
        'ip' => $faker->text,
        'dato_anterior' => $faker->text,
        'dato_nuevo' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
