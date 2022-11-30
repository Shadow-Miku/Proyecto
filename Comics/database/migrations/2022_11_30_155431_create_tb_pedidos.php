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
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->bigIncrements('idPedido');
          	$table->unsignedBigInteger('proveedor_Id');
		    $table->unsignedBigInteger('articulo_Id');
		    $table->unsignedBigInteger('comic_Id');
		    $table->integer('cantidadPedido');
            $table->date('fechaIngreso');
            $table->timestamps();
		    $table->foreign('proveedor_Id')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade');
		    $table->foreign('articulo_Id')->references('idArticulo')->on('tb_articulos')->onDelete('cascade');
		    $table->foreign('comic_Id')->references('idComic')->on('tb_comics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pedidos');
    }
};
