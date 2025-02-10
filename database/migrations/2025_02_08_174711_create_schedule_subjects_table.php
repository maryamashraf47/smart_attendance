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
      Schema::create('schedule_subjects', function (Blueprint $table) {
        $table->string('level', 45);
        $table->string('schedule_day', 30);
        $table->foreignId('schedule_period_number')->constrained('periods')->onDelete('cascade');
        $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
        $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
        $table->string('location_name', 45);
         $table->foreign('location_name')->references('location_name')->on('locations')->onDelete('cascade');

         
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('schedule_subjects');
    }
};
