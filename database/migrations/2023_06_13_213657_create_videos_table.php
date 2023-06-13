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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('channel_id');
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('uid');
            $table->string('path')->nullable();
            $table->string('processed_file')->nullable();
            $table->enum('visibility', ['private', 'public', 'unslited'])->default('private');
            $table->boolean('processed')->default(false);
            $table->boolean('allow_likes')->default(false);
            $table->boolean('allow_comments')->default(false);
            $table->string('processing_percentage')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
