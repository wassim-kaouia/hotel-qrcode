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
        Schema::create('frontends', function (Blueprint $table) {
            $table->id();
            $table->string('title_s1')->nullable();
            $table->text('description_s1')->nullable();
            $table->text('bg_header')->nullable();
            $table->text('bg_video')->nullable();
            $table->string('title_s2')->nullable();
            $table->text('description_s2')->nullable();
            $table->string('title_icon1_s2')->nullable();
            $table->text('description_icon1_s2')->nullable();
            $table->string('title_icon2_s2')->nullable();
            $table->text('description_icon2_s2')->nullable();
            $table->string('title_icon3_s2')->nullable();
            $table->text('description_icon3_s2')->nullable();
            $table->string('title_icon4_s2')->nullable();
            $table->text('description_icon4_s2')->nullable();
            $table->string('title_s3')->nullable();
            $table->text('description_s3')->nullable();
            $table->string('bullet1_s3')->nullable();
            $table->string('bullet2_s3')->nullable();
            $table->string('bullet3_s3')->nullable();
            $table->string('bullet4_s3')->nullable();
            $table->text('image_s3')->nullable();
            $table->string('title_s4')->nullable();
            $table->text('description_s4')->nullable();
            $table->string('title_s5')->nullable();
            $table->text('description_s5')->nullable();
            $table->string('num1_s6')->nullable();
            $table->string('title_num1_s6')->nullable();
            $table->string('num2_s6')->nullable();
            $table->string('title_num2_s6')->nullable();
            $table->string('num3_s6')->nullable();
            $table->string('title_num3_s6')->nullable();
            $table->string('num4_s6')->nullable();
            $table->string('title_num4_s6')->nullable();
            $table->text('address')->nullable();
            $table->text('description_footer')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->text('footer')->nullable();
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
        Schema::dropIfExists('frontends');
    }
};