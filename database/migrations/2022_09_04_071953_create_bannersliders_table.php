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
        Schema::create('bannersliders', function (Blueprint $table) {
            $table->bigIncrements('slider_id');
            $table->string('slider_title',100)->nullable();
            $table->text('slider_heading')->nullable();
            $table->text('slider_caption')->nullable();
            $table->string('slider_button')->nullable();
            $table->text('button_url')->nullable();
            $table->string('slider_image',100)->nullable();
            $table->integer('slider_creator')->nullable();
            $table->integer('slider_editor')->nullable();
            $table->string('slider_slug')->nullable();
            $table->integer('slider_status')->default(1);
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
        Schema::dropIfExists('bannersliders');
    }
};
