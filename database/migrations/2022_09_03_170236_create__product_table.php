<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('bitter_id');
            $table->unsignedInteger('sweet_id');
            $table->unsignedInteger('rich_id');
            $table->unsignedInteger('acidity_id');
            $table->timestamps();

            $table->foreign('bitter_id')->references('id')->on('bitter');
            $table->foreign('sweet_id')->references('id')->on('sweet');
            $table->foreign('rich_id')->references('id')->on('rich');
            $table->foreign('acidity_id')->references('id')->on('acidity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product');
    }
};
