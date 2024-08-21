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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->unsignedBigInteger('class_teacher_id');
            $table->string('class');
            $table->date('admission_date');
            $table->decimal('yearly_fees', 8, 2);
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('phone_number')->nullable(); 
            $table->timestamps();
            $table->softDeletes(); // For soft delete

            $table->foreign('class_teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
