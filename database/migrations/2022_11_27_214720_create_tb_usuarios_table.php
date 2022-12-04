<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->bigInteger('celular');
            $table->date('fechaIngreso');
            $table->string('email');
            $table->string('contraseña');
            $table->string('confirmcontraseña');
            $table->string('cargo');
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
        Schema::dropIfExists('tb_usuarios');
    }
};
