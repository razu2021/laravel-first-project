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
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('news_id');
            $table->string('news_heading',100)->nullable();
            $table->text('news_caption')->nullable();
            $table->string('news_title',100)->nullable();
            $table->text('news_info')->nullable();
            $table->text('news_date')->nullable();
            $table->text('news_button')->nullable();
            $table->string('button_url',25)->nullable();
            $table->string('news_image',50)->nullable();
            $table->integer('news_creator')->nullable();
            $table->integer('news_editor')->nullable();
            $table->string('news_slug')->nullable();
            $table->integer('news_status')->default(1);
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
        Schema::dropIfExists('news');
    }
};
