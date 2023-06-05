<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::table('partenariats', function (Blueprint $table) {
            $table->foreignId('app_id');
            $table->text('partenariat_website')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('partenariats', function (Blueprint $table) {
            $table->dropColumn('app_id');
            $table->dropColumn('partenariat_website');
        });
    }
};