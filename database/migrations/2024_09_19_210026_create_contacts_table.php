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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('status_id');
            
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('photo')->nullable();
            $table->string('phone');
            $table->string('subject');
            $table->text('message');
            $table->date('datetime');

            $table->foreign('status_id')->references('id')->on('contact_statuses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
