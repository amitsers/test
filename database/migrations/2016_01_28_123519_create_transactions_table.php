<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('upload_details');
            $table->string('payment_request_id');
            $table->string('payment_id')->nullable();
            $table->string('name');
            $table->integer('phone')->nullable();
            $table->string('email');
            $table->integer('amount');
            $table->string('shorturl')->nullable();
            $table->string('longurl');
            $table->string('redirect_url');
            $table->string('webhook')->nullable();
            $table->string('payment_request_status');
            $table->string('payment_status');
            $table->string('payment_date_time');
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
        Schema::drop('transactions');
    }
}
