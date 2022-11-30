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
        Schema::create('tb_ventas', function (Blueprint $table) {
            $table->bigIncrements('idVenta');
		    $table->unsignedBigInteger('articulo_Id');
		    $table->unsignedBigInteger('comic_Id');
		    $table->integer('cantidadVenta');
		    $table->integer('precioVenta');
		    $table->unsignedBigInteger('empleado_Id');
            $table->date('fechaIngreso');
            $table->timestamps();
		    $table->foreign('empleado_Id')->references('idEmpleado')->on('tb_empleados')->onDelete('cascade');
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
        Schema::dropIfExists('tb_ventas');
    }
};
