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
        Schema::create('category_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('name');
            $table->boolean('status')->default(1)->comment('1: Aktif, 0: Tidak Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_transactions');
    }
};
