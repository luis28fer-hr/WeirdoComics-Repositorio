<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tb_ventas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('idVenta');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('comic_id')->nullable();
            $table->unsignedBigInteger('articulo_id')->nullable();
            $table->float('precio',8,2);
            $table->integer('cantidad');
            $table->float('total',8,2);
            $table->timestamps();

            $table->foreign("usuario_id")
            ->references("idUsuario")
            ->on("tb_usuarios")
            ->onDelete("cascade");

            $table->foreign("comic_id")
                ->references("idComic")
                ->on("tb_comics")
                ->onDelete("cascade");

            $table->foreign("articulo_id")
                ->references("idArticulo")
                ->on("tb_articulos")
                ->onDelete("cascade");
        });
    }

    public function down()
    {
        //
    }
};
