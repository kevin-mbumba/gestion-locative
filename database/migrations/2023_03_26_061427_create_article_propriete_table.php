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
        Schema::create('article_propriete', function (Blueprint $table) {
            $table->foreignId("propriete_article_id")->constrained();
            $table->foreignId("article_id")->constrained();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('article_propriete',function (Blueprint $table){
            $table->dropForeign(['propriete_article_id','article_id']);
        });
        Schema::dropIfExists('article_propriete');
    }
};
