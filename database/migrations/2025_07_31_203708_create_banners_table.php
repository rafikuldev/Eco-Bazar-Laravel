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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('sub_heading');
            $table->string('heading');
            $table->text('details');
            $table->string('button_name');
            $table->string('button_link');
            $table->string('image');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        // You can add any additional indexes or foreign keys here if needed
        // For example, if you want to add a foreign key to another table, you can do it like this:
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
