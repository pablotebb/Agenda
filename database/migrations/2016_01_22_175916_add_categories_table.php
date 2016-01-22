<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id');
            $table->string('categorianombre');
            $table->string('imagen');
            //llave foranea
            $table->integer('zona_estudio_free_id')->unsigned();
            $table->integer('zona_estudio_private_id')->unsigned();

            $table->foreign('zona_estudio_free_id')
                  ->references('id')
                  ->on('Zona_estudio_free')
                  ->onDelete('cascade');

            $table->foreign('zona_estudio_private_id')
                  ->references('id')
                  ->on('Zona_estudio_private')
                  ->onDelete('cascade');


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
        Schema::drop('categories');
    }
}
