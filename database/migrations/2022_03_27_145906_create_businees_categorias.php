<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusineesCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businees_categorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id');
            $table->foreign('business_id')->references('id')->on('business')->onDelete('cascade');
            $table->foreignId('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
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
        Schema::dropIfExists('businees_categorias');
    }
}
