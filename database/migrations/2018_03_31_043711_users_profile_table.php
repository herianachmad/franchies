<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users_profile', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->string('first_name',35)->nullable();
        $table->string('last_name',35)->nullable();
        $table->boolean('sex')->nullable();
        $table->string('pob',35)->nullable();
        $table->date('dob')->nullable();
        $table->string('address',255)->nullable();
        $table->integer('from_id')->unsigned()->nullable();
        $table->string('pict',255)->nullable();
        $table->string('header_template',255)->nullable();
        $table->string('note',255)->nullable();
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
