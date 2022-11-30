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
            $table->bigIncrements('idArticulo');
 		    $table->string('tipo');
            $table->string('marca');
            $table->string('descripcion');
            $table->integer('cantidadArticulos');
            $table->float('precioCompraAr',8,2);
            $table->float('precioVentaAr',8,2);
		    $table->unsignedBigInteger('proveedor_Id');
            $table->date('fechaIngreso');
            $table->timestamps();
		    $table->foreign('proveedor_Id')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade');
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
