<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurjosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surjos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('titles')->nullable();;
            $table->string('email')->unique();
            $table->string('password');
            $table->string('plain_pass')->nullable();
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
        Schema::dropIfExists('surjos');
    }
}
