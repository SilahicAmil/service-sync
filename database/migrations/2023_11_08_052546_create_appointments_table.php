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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Add user_id for the relationship
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->integer('vehicle_year');
            $table->integer('vehicle_miles');
            $table->string('service_name');
            $table->date('service_date');
            $table->decimal('service_price', 10, 2)->nullable();
            $table->text('additional_notes')->nullable();
            $table->timestamps();

            // Define foreign key constraint for user_id
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
