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
        Schema::create('postnews', function (Blueprint $table) {
            $table->id();
    $table->string('Title')->nullable();
    $table->longText('Description')->nullable();
    $table->string('Category')->nullable();
    $table->unsignedBigInteger('author_id')->nullable();
    $table->string('Image')->nullable();
    $table->timestamps();

    $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postnews');
    }
};
