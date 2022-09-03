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
    
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('ban_id');
            $table->string('ban_title',100)->nullable();
            $table->text('ban_subtitle')->nullable();
            $table->text('ban_button')->nullable();
            $table->string('ban_url',25)->nullable();
            $table->string('ban_image',50)->nullable();
            $table->integer('ban_creator')->nullable();
            $table->integer('ban_editor')->nullable();
            $table->string('ban_slug')->nullable();
            $table->integer('ban_status')->default(1);
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
        Schema::dropIfExists('banners');
    }
};
