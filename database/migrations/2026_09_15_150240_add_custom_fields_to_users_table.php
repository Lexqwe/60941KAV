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
        Schema::table('users', function (Blueprint $table) {
            $table->string("last_name", 50);
            $table->string("first_name", 50);
            $table->string("middle_name", 50)->nullable();
            $table->string("phone", 20);
            $table->string("role", 20)->default("user");
            $table->string("login", 50)->unique();
            $table->string("passport_data", 50)->nullable()->unique();
            $table->string("address", 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("last_name");
            $table->dropColumn("first_name");
            $table->dropColumn("middle_name");
            $table->dropColumn("phone");
            $table->dropColumn("role");
            $table->dropColumn("login");
            $table->dropColumn("passport_data");
            $table->dropColumn("address");
        });
    }
};
