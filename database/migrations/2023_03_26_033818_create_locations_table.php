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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->foreignId('statut_location_id')->constrained();
            $table->foreignId('user_id')->constrained();
            
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('locations',function (Blueprint $table){
            $table->dropForeign(['client_id','statut_location_id','user_id']);
        });
        Schema::dropIfExists('locations');
    }
};
