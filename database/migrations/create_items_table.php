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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ticket')->constrained('ticket');
            $table->foreignId('id_region')->constrained('region');
            $table->foreignId('id_currency')->constrained('carrency');
            $table->string('item_name');
            $table->integer('item_prix');
            $table->integer('item_quentity');
            $table->timestamp('date_of_save');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
