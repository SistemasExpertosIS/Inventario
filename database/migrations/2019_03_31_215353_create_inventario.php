<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventario', function(Blueprint $table){
            $table->increments('idInventario');
            $table->string('Saldo', 45);
            $table->integer('idSucursal')->unsigned();
            $table->integer('idProducto')->unsigned();
            $table->integer('TipoMovimiento_idTipoMovimiento')->unsigned();
    
            $table->timestamps();

            $table->foreign('idSucursal')->references('idSucursal')->on('Sucursal')->onDelete('cascade');
            $table->foreign('idProducto')->references('idProducto')->on('Productos')->onDelete('cascade');
            $table->foreign('TipoMovimiento_idTipoMovimiento')->references('idTipoMovimiento')->on('TipoMovimiento')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('Inventario');
    }
}
