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
            $table->id()->primary()->index();
            $table->string('title');
            $table->text('thumbnailUrl');
            $table->text('videoUrl');
            $table->date('datePosted');
            $table->string('views')->nullable();
            $table->string('likes')->nullable();
            $table->text('description');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
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
