<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorias', function (Blueprint $table) {
            $table->id();
            $table->string('id_inventario');
            $table->string('proveedor');
            $table->string('descripcion');
            $table->string('ubicacion');
            $table->string('origen');
            $table->string('fechaRegistro');
            $table->string('ubicacionActual');
            
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
        Schema::dropIfExists('memorias');
    }
}
