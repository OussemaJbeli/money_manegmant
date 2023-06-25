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
        Schema::create('region', function (Blueprint $table) {
            $table->foreignId("id_user")->constrained('users');
            $table->string('ide_color_cards');
            $table->string('color_side_barre');
            $table->string('color_side_barre_hover');
            $table->string('title_search_bar');
            $table->string('color_search_barre');
            $table->string('color_frame');
            $table->string('color_popup');
            $table->string('title_popup');
            $table->string('color_item_popup');
            $table->string('color_side_popup');
            $table->string('test');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region');
    }
};