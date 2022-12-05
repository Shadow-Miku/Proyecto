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
            $table->string('descripcion');
		    $table->integer('cantidadPedido');
            $table->date('fechaPedido');
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
        Schema::dropIfExists('tb_pedidos');
    }
};
