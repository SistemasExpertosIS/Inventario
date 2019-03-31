<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrasladod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TrasladoD', function(Blueprint $table){
            $table->increments('idTrasladoD');
            $table->string('Cantidad', 45);
            $table->string('Estado', 45);
            $table->integer('idTrasladoM')->unsigned();
            $table->integer('idCaja')->unsigned();
            $table->integer('idProducto')->unsigned();
            $table->timestamps();

            $table->foreign('idTrasladoM')->references('idTrasladoM')->on('TrasladoM')->onDelete('cascade');
            $table->foreign('idCaja')->references('idCaja')->on('Caja')->onDelete('cascade');
            $table->foreign('idProducto')->references('idProducto')->on('Productos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
