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
        Schema::create('tb_comics', function (Blueprint $table) {

            $table->id('idComic');
            $table->string('nombre');
            $table->string('añoEdicion');
            $table->string('compania');
            $table->integer('cantidad');
            $table->float('precioCompra',8,2);
            $table->float('precioVenta',8,2);
            $table->date('fechaIngreso');
            $table->unsignedBigInteger('id_proveedor')->nullable();
            $table->timestamps();
            $table->foreign("id_proveedor")
                ->references("idProveedor")
                ->on("tb_proveedores")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_comics');
    }
};
