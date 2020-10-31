<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre_apellido');
            $table->text('genero');
            $table->text('fechanac');
            $table->integer('edad');
            $table->integer('ci');
            $table->text('barrio');
            $table->text('telefono');
            $table->text('grupo_sanguineo');
            $table->text('enfermedad_referencial');
            $table->text('tipo_prueba');
            $table->text('resultado');
            $table->text('email');
            $table->text('latitud');
            $table->text('longitud');
            $table->integer('usuario_id');
            $table->text('ip');
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
        Schema::drop('pacients');
    }
}
