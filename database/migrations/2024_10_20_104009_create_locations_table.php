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
    Schema::create('locations', function (Blueprint $table) {
      $table->id();
      $table->string('slug');
      $table->string('title');
      $table->string('audio_file')->nullable();
      $table->string('subtitle')->nullable();
      $table->boolean('published')->default(true);
      $table->float('latitude');
      $table->float('longitude');
      $table->foreignId('place_id')->constrained('places');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('locations');
  }
};
