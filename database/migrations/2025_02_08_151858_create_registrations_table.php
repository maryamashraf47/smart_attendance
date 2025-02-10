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
        
      Schema::create('registrations', function (Blueprint $table) {
        $table->id('registration_id')->primary();
        $table->string('level', 45);
        $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
        $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('registrations');
    }
};
