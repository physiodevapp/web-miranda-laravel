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
        if (!Schema::hasTable('rooms_facilities_relation')) {
            Schema::create('rooms_facilities_relation', function (Blueprint $table) {
                $table->id();
                
                $table->foreignId('room_id')->constrained()->onDelete('cascade');
                $table->foreignId('facility_id')->constrained()->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms_facilities_relation');
    }
};
