<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('out',['oui','non']);
            $table->enum('work',['oui','non']);
            $table->enum('contact',['oui','non']);
            $table->enum('meet',['oui','non']);
            $table->enum('assist',['oui','non']);
            $table->enum('fivers',['oui','non']);
            $table->enum('mucils',['oui','non']);
            $table->enum('cough',['oui','non']);
            $table->enum('smell',['oui','non']);
            $table->enum('gorge',['oui','non']);
            $table->enum('vomiting',['oui','non']);
            $table->enum('age',['oui','non']);
            $table->float('weight');
            $table->float('tall');
            $table->enum('pressure',['oui','non']);
            $table->enum('diab',['oui','non']);
            $table->enum('cancer',['oui','non']);
            $table->enum('breathing',['oui','non']);
            $table->enum('renal',['oui','non']);
            $table->enum('liver',['oui','non']);
            $table->enum('pregnant',['oui','non','non_concerne']);
            $table->enum('deasis',['oui','non']);
            $table->enum('bcg',['oui','non']);
            $table->enum('influenza',['oui','non']);

            $table->string('ip')->nullable();
            $table->integer('result')->nullable();
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
        Schema::dropIfExists('cases');
    }
}
