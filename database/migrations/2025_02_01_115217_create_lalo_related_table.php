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
         Schema::create('lalo_related', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade'); // Linking to the registrations table
            $table->enum('preferred_track', ['Track1', 'Track2', 'Track3']); // Adjust enum values as needed
            $table->text('why_join_lalodev');
            $table->text('specific_skills_or_knowledge');
            $table->string('current_job_role');
            $table->string('industry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lalo_related');
    }
};
