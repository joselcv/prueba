<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignaciones', function (Blueprint $table) {
            $table->increments('con_codigo');            
            $table->double('con_valor');
            $table->date('con_fecha');
            $table->text('con_descripcion');
            $table->unsignedInteger('cue_numero');
            $table->foreign('cue_numero')->references('cue_numero')->on('cuentas');
            $table->integer('usu_cedula');
            $table->foreign('usu_cedula')->references('usu_cedula')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consignaciones');
    }
}
