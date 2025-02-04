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
        Schema::create('custom_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade'); // Linking to the registrations table
            $table->text('how_did_you_hear_about_lalodev');
            $table->enum('how_committed_are_you', ['Not at all', 'Somewhat', 'Very committed']); // Enum for commitment level
            $table->enum('preferred_learning_format', ['Online', 'via learning hub system']); // Enum for learning format
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_datas');
    }
};
