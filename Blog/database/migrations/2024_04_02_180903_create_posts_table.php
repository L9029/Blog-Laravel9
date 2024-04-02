<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("body");
            
            //Creando un campo que contiene una llave foranea del id de la tabla users
            $table->unsignedBigInteger("user_id"); //Se le pide que el campo solo acepte numeros positivos y que sean de tipo int
            $table->foreign("user_id")->references("id")->on("users"); //Crea la llave foranea
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
        Schema::dropIfExists('posts');
    }
};
