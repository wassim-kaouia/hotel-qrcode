<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description');
            $table->text('avatar');
            $table->foreignId('user_id');
            $table->foreignId('imageapp_id');
            $table->string('urlName')->unique();
            $table->foreignId('setting_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apps');
    }
};
