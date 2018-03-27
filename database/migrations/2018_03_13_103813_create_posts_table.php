<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('category_posts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',50)->unique();
          $table->string('description',190);
          $table->timestamps();
      });

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('from_section')->nullable();
            $table->string('title', 191)->nullable();
            $table->string('description', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('pict',191)->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('ishalal')->nullable();
            $table->enum('hardness_level',['e','m','h'])->nullable();
            $table->string('slug',255);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('category_posts')
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
        Schema::dropIfExists('posts');
        Schema::dropIfExists('category_posts');
    }
}
