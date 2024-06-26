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
            $table->unsignedBigInteger('pizza_id')->nullable();
            $table->foreign('pizza_id')->references('id')->on('pizza');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bestelling', function (Blueprint $table){
            $table->dropForeign(['pizza_id']);
            $table->dropColumn('pizza_id');
        });
    }
};
