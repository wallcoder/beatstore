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
        Schema::create('license_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('license_id')->constrained('licenses')->onDelete('cascade');
            $table->string('music_videos')->nullable();
            $table->string('distribute_copies')->nullable();
            $table->string('performance_rights')->nullable();
            $table->string('publishing_rights')->nullable();
            $table->string('license_duration')->nullable();
            $table->string('audio_streams')->nullable();
            $table->string('radio_streams')->nullable();
            $table->string('youtube_monetization')->nullable();
            $table->string('master_rights')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('license_details');
    }
};
