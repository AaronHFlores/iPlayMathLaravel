<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimary3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primaryThird', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->integer('type');
            $table->string('firstAnswer');
            $table->string('secondAnswer');
            $table->string('thirdAnswer');
            $table->string('quarterAnswer');
            $table->string('correctAnswer');
            $table->string('image');
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
        Schema::dropIfExists('primaryThird');
    }
}
