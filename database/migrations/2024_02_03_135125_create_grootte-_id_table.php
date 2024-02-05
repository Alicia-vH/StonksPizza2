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
        Schema::table('bestelling', function (Blueprint $table){
            $table->unsignedBigInteger('grootte_id')->nullable();
            $table->foreign('grootte_id')->references('id')->on('grootte');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bestelling', function (Blueprint $table){
            $table->dropForeign(['grootte_id']);
            $table->dropColumn('grootte_id');
        });
    }
};
