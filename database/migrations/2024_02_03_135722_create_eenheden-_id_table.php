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
        Schema::table('ingredientens', function (Blueprint $table){
            $table->unsignedBigInteger('eenheden_id')->nullable();
            $table->foreign('eenheden_id')->references('id')->on('eenhedens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bestelling', function (Blueprint $table){
            $table->dropForeign(['eenheden_id']);
            $table->dropColumn('eenheden_id');
        });
    }
};
