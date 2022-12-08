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
        Schema::create('tb_articulos', function (Blueprint $table) {
            $table->id('idArticulo');
            $table->string('nombre');
            $table->string('tipo');
            $table->unsignedBigInteger('id_marca')->nullable();
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->float('precioCompra',8,2);
            $table->float('precioVenta',8,2);
            $table->date('fechaIngreso');
            $table->unsignedBigInteger('id_proveedor')->nullable();
            $table->timestamps();
            $table->foreign("id_marca")
            ->references("idMarca")
            ->on("tb_marcas")
            ->onUpdate("cascade")
            ->onDelete("set null");
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
        Schema::dropIfExists('tb_articulos');
    }
};
