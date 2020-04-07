<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('productId')->unsigned()->index();
            $table->text('review');
            $table->string('customerName');
            $table->integer('star');
            $table->timestamps();
        });

    Schema::table('reviews', function($table) {
	    $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');

   });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
