<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // in ..._create_facilities_table.php
public function up(): void
{
    Schema::create('facilities', function (Blueprint $table) {
        $table->id();
        $table->string('icon'); // This will store the image path
        $table->string('title');
        $table->string('subtitle');
        $table->boolean('status')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
