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
        Schema::create('homepage_services', function (Blueprint $table) {
            $table->bigIncrements('service_id');
            $table->string('service_heading',100)->nullable();
            $table->text('service_caption')->nullable();
            $table->string('service_title',100)->nullable();
            $table->text('service_subtitle')->nullable();
            $table->text('service_info')->nullable();
            $table->text('service_button')->nullable();
            $table->string('button_url',25)->nullable();
            $table->string('service_image',50)->nullable();
            $table->integer('service_creator')->nullable();
            $table->integer('service_editor')->nullable();
            $table->string('service_slug')->nullable();
            $table->integer('service_status')->default(1);
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
        Schema::dropIfExists('homepage_services');
    }
};
