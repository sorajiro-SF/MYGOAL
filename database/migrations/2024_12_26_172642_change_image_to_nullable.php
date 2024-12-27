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
        Schema::table('mprofiles', function (Blueprint $table) {
            $table->text('image_path')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mprofiles', function (Blueprint $table) {
            $table->text('image_path')->nullable(false)->change();
        });
    }
};
