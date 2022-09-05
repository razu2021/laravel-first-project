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
        Schema::create('whychooses', function (Blueprint $table) {
            $table->bigIncrements('choose_id');
            $table->string('choose_heading',100)->nullable();
            $table->text('choose_caption')->nullable();
            $table->string('news_title',100)->nullable();
            $table->integer('news_count')->nullable();
            $table->text('choose_info')->nullable();
            $table->integer('choose_creator')->nullable();
            $table->integer('choose_editor')->nullable();
            $table->string('choose_slug')->nullable();
            $table->integer('choose_status')->default(1);
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
        Schema::dropIfExists('whychooses');
    }
};
