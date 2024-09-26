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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('room_id');
            
            $table->string('first_name');
            $table->string('last_name');
            $table->text('special_request');
            $table->dateTime('order_date', precision: 0);
            $table->dateTime('check_in', precision: 0);
            $table->dateTime('check_out', precision: 0);

            $table->foreign('status_id')->references('id')->on('booking_statuses');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
