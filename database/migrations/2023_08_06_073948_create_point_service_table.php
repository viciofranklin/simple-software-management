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
        Schema::create('point_service', function (Blueprint $table) {
            $table->unsignedBigInteger('point_id');
            $table->unsignedBigInteger('service_id');

            $table->foreign('point_id')->references('id')->on('points');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('point_service');
    }
};
