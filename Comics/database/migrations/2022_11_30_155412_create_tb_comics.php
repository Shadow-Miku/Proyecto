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
            $table->bigIncrements('idComic');
            $table->string('nombre');
            $table->string('edicion');
            $table->string('compania');
            $table->integer('cantidadComics');
            $table->float('precioCompraCo',8,2);
            $table->float('precioVentaCo',8,2);
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
        Schema::dropIfExists('tb_comics');
    }
};
