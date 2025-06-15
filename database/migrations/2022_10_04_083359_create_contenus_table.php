<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->text('titre');
            $table->text('titre_en');
            $table->text('libelle')->nullable();
            $table->text('libelle_en')->nullable();
            $table->string('video1',50)->nullable();
            $table->string('video1_en',50)->nullable();
            $table->string('video2',50)->nullable();
            $table->string('video2_en',50)->nullable();
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
        Schema::dropIfExists('contenus');
    }
}
