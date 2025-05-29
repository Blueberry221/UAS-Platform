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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->string('seat_number', 10);
            $table->enum('category', ['VIP', 'Regular']);
            $table->decimal('price', 10, 2);
            $table->enum('status', ['available', 'booked', 'canceled'])->default('available');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->dateTime('booked_at')->nullable();
            $table->string('payment_method', 50)->nullable();
            $table->timestamps();

            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
