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
        Schema::create('teammembers', function (Blueprint $table) {
            $table->bigIncrements('uniq_id');
            $table->string('heading',100)->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->text('caption')->nullable();
            $table->text('info')->nullable();
            $table->text('facebook')->nullable();
            $table->string('facebook_url')->nullable();
            $table->text('twitter')->nullable();
            $table->string('twitter_url')->nullable();
            $table->text('linkedin')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->text('instagram')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('image',100)->nullable();
            $table->string('bgimage',100)->nullable();
            $table->integer('post_creator')->nullable();
            $table->integer('post_editor')->nullable();
            $table->string('slug')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('teammembers');
    }
};
