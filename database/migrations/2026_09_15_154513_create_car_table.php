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
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string("license_plate", 20)->unique();
            $table->foreignId("category_id")->constrained("category");
            $table->string("brand", 50);
            $table->string("model", 50);
            $table->integer("year");
            $table->string("color", 50);
            $table->decimal("price_per_day", 10, 2);
            $table->string("status", 20)->default("available");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car');
    }
};
