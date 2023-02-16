<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->json('modules_state');
            $table->json('app_theme');
            $table->json('app_setting')->nullable();

            $table->unsignedBigInteger('app_id');
            $table->foreign('app_id')->references('id')->on('apps');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
