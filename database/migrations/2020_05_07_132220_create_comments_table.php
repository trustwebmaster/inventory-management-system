<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('body');
            $table->string('url',255)->nullable();
            $table->integer('commentable_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('commentable_type');

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
             $table->engine = 'InnoDB';

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
        Schema::dropIfExists('comments');
    }
}
