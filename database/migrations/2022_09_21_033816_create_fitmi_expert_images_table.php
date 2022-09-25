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
        Schema::create('fitmi_expert_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fitmi_expert_id');
            $table->string('image');

            $table->foreign('fitmi_expert_id')->references('id')->on('fitmi_experts')->onDelete('cascade');
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
        Schema::dropIfExists('fitmi_expert_images');
    }
};
