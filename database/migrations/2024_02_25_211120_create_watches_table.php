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
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->boolean('image')->nullable();
            $table->string('price')->nullable();
            $table->string('price_range_brand_class')->nullable();
            $table->string('movement')->nullable();
            $table->string('functionality')->nullable();
            $table->string('style1')->nullable();
            $table->string('style2')->nullable();
            $table->string('style3')->nullable();
            $table->string('style4')->nullable();
            $table->string('style5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};
