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
        Schema::create('homeabouts', function (Blueprint $table) {
            $table->bigIncrements('homeabout_id');
            $table->string('title1',100)->nullable();
            $table->string('title2',100)->nullable();
            $table->string('title3',100)->nullable();
            $table->text('info1')->nullable();
            $table->text('info2')->nullable();
            $table->text('info3')->nullable();
            $table->text('name1')->nullable();
            $table->text('name2')->nullable();
            $table->text('name3')->nullable();
            $table->string('designation1')->nullable();
            $table->string('designation2')->nullable();
            $table->string('designation3')->nullable();
            $table->string('button')->nullable();
            $table->string('button_url')->nullable();
            $table->string('about_image',100)->nullable();
            $table->integer('about_creator')->nullable();
            $table->integer('about_editor')->nullable();
            $table->string('about_slug')->nullable();
            $table->integer('about_status')->default(1);
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
        Schema::dropIfExists('homeabouts');
    }
};
