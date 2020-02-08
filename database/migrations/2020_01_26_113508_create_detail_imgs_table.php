<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_imgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('img');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('pro_id');
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->foreign('pro_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_imgs');
    }
}
