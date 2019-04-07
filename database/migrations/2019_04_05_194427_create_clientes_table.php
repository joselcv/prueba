<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('cli_cedula');
            $table->primary('cli_cedula');
            $table->string('cli_nombre');
            $table->string('cli_direccion');
            $table->string('cli_telefono');
            $table->string('cli_mail');
            $table->unsignedInteger('tdoc_codigo');
            $table->foreign('tdoc_codigo')->references('tdoc_codigo')->on('tipos_documentos');
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
        Schema::dropIfExists('clientes');
    }
}
