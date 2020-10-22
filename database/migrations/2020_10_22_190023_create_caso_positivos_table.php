<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasoPositivosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso_positivos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre_apellido');
            $table->text('codigo');
            $table->text('region');
            $table->integer('codigo_distrito');
            $table->text('distrito');
            $table->text('fecha_notificacion');
            $table->text('medico');
            $table->integer('media_edad');
            $table->text('residente');
            $table->text('hospedaje');
            $table->text('telefono_verificado');
            $table->integer('codigo_departamento');
            $table->text('departamento');
            $table->text('zona');
            $table->text('personal_de_blanco');
            $table->text('albergue');
            $table->text('lugar_albergue');
            $table->text('sintomas_fiebre');
            $table->text('hospitalizado');
            $table->text('signo_sintoma');
            $table->text('vacuna_para_la_influenza');
            $table->text('fecha_vacunacion');
            $table->text('viajo_resiente');
            $table->text('centro_asistencia_covid');
            $table->text('centro_asistencia_pais');
            $table->text('centro_asistencia_ciudad');
            $table->text('nombre_centro_asistencia');
            $table->text('fecha_asistida');
            $table->text('contacto_con_animales');
            $table->text('contacto_persona');
            $table->text('tipo_contacto');
            $table->text('contacto_con_infectado');
            $table->text('dato_de_contacto');
            $table->text('toma_de_muestra');
            $table->text('laboratorio');
            $table->text('nro_planilla');
            $table->text('anho');
            $table->text('responsable_de_carga');
            $table->integer('usuario_lugar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('caso_positivos');
    }
}
