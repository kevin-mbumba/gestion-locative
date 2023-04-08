<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_location', function (Blueprint $table) {
            $table->foreignId('article_id')->constrained();
            $table->foreignId('location_id')->constrained();
        
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('article_location',function (Blueprint $table){
            $table->dropForeign(['location_id','article_id']);
        });
        Schema::dropIfExists('article_location');
    }
};
