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
        Schema::create('fitness_centers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->longText('description');
            $table->string('bussiness_name');
            $table->mediumText('location');
            $table->unsignedBigInteger('city_id');
            $table->mediumText('directions');
            $table->string('availability');
            $table->tinyInteger('live_streams')->default('0')->comment('0=avilable,1=not-avilable');
            $table->tinyInteger('status')->default('0')->comment('0=visible,1=hidden');
            $table->string('kcal');
            $table->string('duration');

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('fitness_center_categories')->onDelete('cascade');
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
        Schema::dropIfExists('fitness_centers');
    }
};
