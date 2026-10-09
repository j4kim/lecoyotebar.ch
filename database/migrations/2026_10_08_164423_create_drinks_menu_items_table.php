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
        Schema::create('drinks_menu_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('drinks_menu_group_id')->constrained();
            $table->string('category')->nullable();
            $table->string('name')->nullable();
            $table->string('details')->nullable();
            $table->string('note')->nullable();
            $table->string('base')->nullable();
            $table->string('weight')->nullable();
            $table->float('abv')->nullable();
            $table->boolean('non_alcoholic_available')->nullable();
            $table->boolean('mixer_not_included')->nullable();
            $table->json('prices')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drinks_menu_items');
    }
};
