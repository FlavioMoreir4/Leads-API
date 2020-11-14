<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidato', 255);
            $table->string('responsavel', 255);
            $table->string('idade', 255);
            $table->string('email', 255);
            $table->string('whatsapp', 255);
            $table->string('regiao', 255);
            $table->string('bairro', 255);
            $table->string('zona', 255);
            $table->string('campanha', 255);
            $table->string('franquia', 255);
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
        Schema::dropIfExists('leads');
    }
}
