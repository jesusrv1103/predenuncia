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
            $table->string('correo_electronico')->nullable($value = true);
            $table->string('telefono')->nullable($value = true);
            $table->enum('forma_notificacion', ['CORREO', 'TELEFONO'])->default('CORREO');
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
