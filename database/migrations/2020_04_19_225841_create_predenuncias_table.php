<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predenuncias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('folio',20);
            $table->BigInteger('denunciante_id')->unsigned();
            $table->foreign('denunciante_id')->references('id')->on('denunciantes');
            $table->BigInteger('lugar_hechos_id')->unsigned();
            $table->foreign('lugar_hechos_id')->references('id')->on('lugar_hechos');
            $table->longText('descripcion');
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
        Schema::dropIfExists('predenuncias');
    }
}
