<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiliaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cidade');
            $table->integer('cnpj');
            $table->string('endereco');
            $table->string('email');
            $table->string('latitude');
            $table->string('longitude');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filiais');
    }
}
