<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoVinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_vinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color');
            $table->string('tipo');
            $table->integer('meses_tiempo');
            $table->string('t_azucar');
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
        Schema::dropIfExists('info_vinos');
    }
}
