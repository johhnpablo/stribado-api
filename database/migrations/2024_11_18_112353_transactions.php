<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('icon');
            $table->string('description');
            $table->enum('type', ['income', 'expense'])->default('expense');
            $table->enum('recurrence', ['active', 'inactive'])->default('active');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('');
    }
};
