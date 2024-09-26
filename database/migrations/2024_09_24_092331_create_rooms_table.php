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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('status_id');
            
            $table->integer('number');
            $table->text('description');
            $table->string('name');
            $table->text('cancellation_policy');
            $table->integer('has_offer');
            $table->string('type');
            $table->decimal('price_night', 10, 2);
            $table->integer('discount');
            $table->string('photos');

            $table->foreign('status_id')->references('id')->on('room_statuses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
