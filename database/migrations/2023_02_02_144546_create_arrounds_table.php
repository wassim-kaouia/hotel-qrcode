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
        Schema::create('arrounds', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('distance')->nullable();
            $table->foreignId('arroundimage_id');
            $table->text('link')->nullable();
            $table->foreignId('app_id');
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
        Schema::dropIfExists('arrounds');
    }
};
