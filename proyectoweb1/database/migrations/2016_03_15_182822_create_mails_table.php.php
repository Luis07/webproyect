<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable.php extends Migration
{
     public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('destino');
            $table->string('asunto');
            $table->string('contenido');
            $table->string('enviado');
            $table->string('borrador');
            $table->string('salida');
            $table->rememberToken();
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
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
        Schema::drop('mails');
    }
}
