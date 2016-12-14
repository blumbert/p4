<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_user', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('shoe_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('shoe_id')->references('id')->on('shoes');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('miles')->unsigned()->nullable();
            $table->text('comments')->nullable();
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
        Schema::drop('shoe_user');
    }
}
