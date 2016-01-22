<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('profesion', 50);
            $table->string('telefono', 15);
            $table->string('direccion', 70);
            $table->string('email', 25);
            $table->string('linkedin', 40);
            $table->string('twitter', 40);
            $table->string('facebook', 40);
            $table->string('web', 40);
            $table->string('github', 40);
            // llave foránea
            $table->integer('id_user')->unsigned();

            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
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
        Schema::drop('contactos');
    }
}
