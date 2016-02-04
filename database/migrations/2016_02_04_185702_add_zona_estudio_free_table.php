<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddZonaEstudioFreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona_estudio_free', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 25);
            $table->text('descripcion');
            $table->string('github', 40);
            $table->string('videos', 40);
            $table->boolean('visto');
            $table->integer('repaso');
            //llave foránea
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
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
        Schema::drop('zona_estudio_free');
    }
}
