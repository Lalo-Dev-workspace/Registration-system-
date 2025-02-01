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
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade'); // Linking to the registrations table
            $table->text('relevant_skills_or_pre_experience');
            $table->string('git_profile')->nullable(); // Git profile link
            $table->string('telegram_profile')->nullable(); // Telegram profile link
            $table->string('linkedin_profile')->nullable(); // LinkedIn profile link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
