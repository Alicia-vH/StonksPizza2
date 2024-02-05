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
            $table->unsignedBigInteger('orderstatus_id')->nullable();
            $table->foreign('orderstatus_id')->references('id')->on('orderstati');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bestelling', function (Blueprint $table){
            $table->dropForeign(['orderstatus_id']);
            $table->dropColumn('orderstatus_id');
        });
    }
};
