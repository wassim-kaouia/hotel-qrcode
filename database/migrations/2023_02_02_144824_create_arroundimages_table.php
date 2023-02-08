<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('arroundimages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('image_url');
            $table->foreignId('arround_id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arroundimages');
    }
};
