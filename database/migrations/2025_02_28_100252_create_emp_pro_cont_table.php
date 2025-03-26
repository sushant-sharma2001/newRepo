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
        Schema::create('emp_pro_cont', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emp_id')->constrained('employees');
            $table->foreignId('pro_id')->constrained('profiles');
            $table->foreignId('cont_id')->constrained('contacts');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_pro_cont');
    }
};
