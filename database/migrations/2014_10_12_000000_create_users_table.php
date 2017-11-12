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
            $table->increments('id');
            $table->string('email')->unique();
            $table->integer('ut_id')->unsigned(); /*tipo de usuario*/
            $table->foreign('ut_id')
                  ->references('id_ut')
                  ->on('user_types');
            $table->boolean('status');
            $table->integer('person_id')->unsigned(); /*tipo de usuario*/
            $table->foreign('person_id')
                  ->references('id_person')
                  ->on('persons');
            $table->boolean('status');
            $table->string('password');
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
