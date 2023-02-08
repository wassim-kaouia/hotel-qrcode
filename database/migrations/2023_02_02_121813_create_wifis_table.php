<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('wifis', function (Blueprint $table) {
            $table->id();
            $table->string('wifi_name');
            $table->string('type');
            $table->string('code');
            $table->foreignId('app_id');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('wifis');
    }
};
