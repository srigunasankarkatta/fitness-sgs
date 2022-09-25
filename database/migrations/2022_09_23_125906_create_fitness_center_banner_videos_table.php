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
        Schema::create('fitness_center_banner_videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fitness_center_id');
            $table->string('video');

            $table->foreign('fitness_center_id')->references('id')->on('fitness_centers')->onDelete('cascade');
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
        Schema::dropIfExists('fitness_center_banner_videos');
    }
};
