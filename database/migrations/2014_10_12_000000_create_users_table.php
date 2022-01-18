<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //Columnas para la tabla
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 50);
            $table->string('personal_phone', 10);
            $table->string('home_phone', 9);
            $table->string('address', 50);
            $table->string('password');
            $table->boolean('state')->default(true);

            //columna unica de email
            $table->string('email')->unique();
            //columnas que aceptan registros null
            $table->date('birthdate')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            //columnas especiales para la tabla de la BDD
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
