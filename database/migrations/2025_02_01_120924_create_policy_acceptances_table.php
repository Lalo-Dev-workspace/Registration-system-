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
        Schema::create('policy_acceptances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade'); // Foreign key for registrations table
            $table->boolean('accepted_terms')->default(false);                        // Indicates whether terms were accepted
            $table->boolean('accepted_privacy_policy')->default(false);               // Indicates whether privacy policy was accepted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_acceptances');
    }
};
