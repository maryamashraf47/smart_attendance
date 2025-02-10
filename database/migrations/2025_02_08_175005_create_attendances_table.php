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
      Schema::create('attendances', function (Blueprint $table) {
        $table->string('day', 45);
        $table->string('subject', 45);
        $table->string('location', 45);
        $table->foreignId('period')->constrained('periods')->onDelete('cascade');
        $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
          
          
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('attendances');
    }
};
