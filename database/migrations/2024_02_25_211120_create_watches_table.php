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
            $table->boolean('image');
            $table->string('price');
            $table->string('price_range_brand_class');
            $table->string('movement');
            $table->string('functionality');
            $table->string('style1');
            $table->string('style2');
            $table->string('style3');
            $table->string('style4');
            $table->string('style5');
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
