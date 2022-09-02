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
        // coffeeの各詳細カテゴリ
        Schema::create('coffee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bitter');
            $table->string('sweet');
            $table->string('rich');
            $table->string('acidity');
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
        Schema::dropIfExists('coffee');
    }
};
