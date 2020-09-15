<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->string("serie");
            $table->string("fabricante");
            $table->string("posicionGic");
            $table->string("sociedad");
            $table->string("mueble");
            $table->string("modelo");
            $table->string("estado");	
            $table->string("fechaFabricacion");
            $table->string("centro");
            $table->string("subdivision");
            $table->string("participado");	
            $table->string("fechaDeIngreso");	
            $table->string("fechaDeSalida");	
            $table->string("origen");	
            $table->string("destino");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slots');
    }
}
