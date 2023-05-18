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
            $table->text('modules_state');
            $table->text('app_theme');
            $table->text('app_setting')->nullable();

            $table->string('wifi_text')->nullable();
            $table->text('wifi_path')->nullable();

            $table->string('livre_text')->nullable();
            $table->text('livre_path')->nullable();

            $table->string('info_text')->nullable();
            $table->text('info_path')->nullable();
            
            $table->string('numero_text')->nullable();
            $table->text('numero_path')->nullable();

            $table->string('arround_text')->nullable();
            $table->text('arround_path')->nullable();
            
            $table->string('welcome_text')->nullable();
            $table->text('welcome_path')->nullable();

            $table->string('digicode_text')->nullable();
            $table->text('digicode_path')->nullable();

            $table->string('arrival_text')->nullable();
            $table->text('arrival_path')->nullable();

            $table->string('departure_text')->nullable();
            $table->text('departure_path')->nullable();

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