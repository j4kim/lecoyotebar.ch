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
        Schema::create('drinks_menu_groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('drinks_menu_id')->constrained();
            $table->string('title')->nullable();
            $table->json('columns')->nullable();
            $table->boolean('show_abv')->nullable();
            $table->json('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drinks_menu_groups');
    }
};
