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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pricelist_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('point_id');
            $table->float('price');
            $table->boolean('online')->default(0);

            $table->timestamps();

            $table->foreign('pricelist_id')->references('id')->on('pricelists');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('point_id')->references('id')->on('points');

            $table->unique(['pricelist_id','service_id','point_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
