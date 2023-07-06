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
        Schema::create('user', function (Blueprint $table) {
            $table->string('name')->unique()->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('path_avatar');
            $table->timestamp('created_at');
            $table->timestamp('last_login');
            $table->timestamp('updated_at');
            $table->string('them');
            $table->string('side_pict');
            $table->string('sid_min_chek');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
