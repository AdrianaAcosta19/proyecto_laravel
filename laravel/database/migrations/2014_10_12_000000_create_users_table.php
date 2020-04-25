<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('address');
            $table->string('photo')->default('imgs/nophoto.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('editar');
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
