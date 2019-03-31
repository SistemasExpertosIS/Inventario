<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrasladom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('TrasladoM', function(Blueprint $table){
            $table->increments('idTrasladoM');
            $table->string('Descripcion', 45);
            $table->integer('idTipoMovimiento')->unsigned();
            $table->integer('idUsuarioRecibe')->unsigned();
            $table->integer('idUsuarioEnvia')->unsigned();
            $table->integer('idSucursalRecibe')->unsigned();
            $table->integer('idSucursalEnvia')->unsigned();
            $table->integer('idTransporte')->unsigned();
            $table->timestamps();

            $table->foreign('idTipoMovimiento')->references('idTipoMovimiento')->on('TipoMovimiento')->onDelete('cascade');
            $table->foreign('idUsuarioRecibe')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idUsuarioEnvia')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idSucursalRecibe')->references('idSucursal')->on('Sucursal')->onDelete('cascade');
            $table->foreign('idSucursalEnvia')->references('idSucursal')->on('Sucursal')->onDelete('cascade');
            $table->foreign('idTransporte')->references('idTransporte')->on('Transporte')->onDelete('cascade');
            
        });
    }
}
