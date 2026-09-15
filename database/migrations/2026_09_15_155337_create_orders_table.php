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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("manager_id")->nullable()->constrained("users");
            $table->foreignId("inspector_id")->nullable()->constrained("users");
            $table->foreignId("car_id")->constrained("car")->onDelete("restrict");
            $table->foreignId("user_id")->constrained("users")->onDelete("restrict");
            $table->date("start_date");
            $table->date("end_date");
            $table->string("car_condition", 20)->nullable();
            $table->decimal("fine", 10, 2)->default(0);
            $table->decimal("total_cost", 10, 2);
            $table->string("status", 20)->default("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
