<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBdAuditoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_auditoria', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->sting('operacion');
            $table->string('tabla_nombre');
            $table->time('fecha_de_operacion');
            $table->string('ip');
            $table->hstore('dato_anterior');
            $table->hstore('dato_nuevo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd_auditoria');
    }
}
