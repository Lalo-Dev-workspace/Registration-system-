<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade'); // Foreign key for registrations table
            $table->string('location'); // Location in the format City, Country
            $table->string('timezone'); // Timezone (e.g., UTC, PST)
            $table->datetime('availability')->nullable(); // Preferred start date or time, stored as datetime
            $table->string('emergency_contact_name');
            $table->string('referral_code')->nullable(); // Referral code, nullable as it might not always be used
            $table->string('alternative_email')->nullable(); // Alternative email, nullable
            $table->enum('preferred_comm_type', ['Email', 'Phone', 'Telegram', 'Other'])->nullable(); // Preferred communication type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
