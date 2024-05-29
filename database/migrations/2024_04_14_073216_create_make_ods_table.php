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
        Schema::create('make_ods', function (Blueprint $table) {
            $table->id();
            $table->string('Date')->unique();
            $table->string('FD_FY')->nullable();;
            $table->string('FD_SY')->nullable();;
            $table->string('FD_TY')->nullable();;
            $table->string('HD_FY')->nullable();;
            $table->string('HD_SY')->nullable();;
            $table->string('HD_TY')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_ods');
    }
};
