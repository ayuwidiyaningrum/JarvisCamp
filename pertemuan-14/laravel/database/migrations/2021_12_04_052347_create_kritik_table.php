<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->id();
            $table->text('isi');
            $table->integer('point');
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('film_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kritik');
    }
}
