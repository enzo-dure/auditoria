<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Caso_positivo;
use Faker\Generator as Faker;

$factory->define(Caso_positivo::class, function (Faker $faker) {

    return [
        'nombre_apellido' => $faker->text,
        'codigo' => $faker->text,
        'region' => $faker->text,
        'codigo_distrito' => $faker->word,
        'distrito' => $faker->text,
        'fecha_notificacion' => $faker->text,
        'medico' => $faker->text,
        'media_edad' => $faker->word,
        'residente' => $faker->text,
        'hospedaje' => $faker->text,
        'telefono_verificado' => $faker->word,
        'codigo_departamento' => $faker->word,
        'departamento' => $faker->text,
        'zona' => $faker->text,
        'personal_de_blanco' => $faker->word,
        'albergue' => $faker->text,
        'lugar_albergue' => $faker->text,
        'sintomas_fiebre' => $faker->word,
        'hospitalizado' => $faker->text,
        'signo_sintoma' => $faker->word,
        'vacuna_para_la_influenza' => $faker->text,
        'fecha_vacunacion' => $faker->word,
        'viajo_resiente' => $faker->word,
        'centro_asistencia_covid' => $faker->word,
        'centro_asistencia_pais' => $faker->text,
        'centro_asistencia_ciudad' => $faker->text,
        'nombre_centro_asistencia' => $faker->word,
        'fecha_asistida' => $faker->text,
        'contacto_con_animales' => $faker->text,
        'contacto_persona' => $faker->text,
        'tipo_contacto' => $faker->text,
        'contacto_con_infectado' => $faker->text,
        'dato_de_contacto' => $faker->text,
        'toma_de_muestra' => $faker->text,
        'laboratorio' => $faker->text,
        'nro_planilla' => $faker->text,
        'anho' => $faker->text,
        'responsable_de_carga' => $faker->word,
        'usuario_lugar' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
