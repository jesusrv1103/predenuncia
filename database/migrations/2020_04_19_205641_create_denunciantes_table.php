<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenunciantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denunciantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('correo_electronico')->nullable($value = true);
            $table->string('telefono')->nullable($value = true);
            $table->boolean('notificacion_correo')->default(0);
            $table->boolean('notificacion_telefono')->default(0);
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
        Schema::dropIfExists('denunciantes');
    }
}
