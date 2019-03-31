<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sucursal', function(Blueprint $table){
            $table->increments('idSucursal');
            $table->string('Nombre', 45);
            $table->string('Direccion', 45);
            $table->string('Abv', 45);
            $table->integer('idUsuario')->unsigned();
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sucursal');
    }
}
