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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->enum('career-level', ['internship', 'entry-level', 'junior', 'mid-senior', 'senior', 'team-lead']);
            $table->enum('education-level',['Bachelors_Degree','Masters_Degree','MBA','Diploma'])->nullable();
            $table->decimal('salary', 10, 2);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->text('job_overview');
            $table->text('key_responsibilities');
            $table->text('job_requirements');
            $table->text('preferred_qualifications');
            $table->string('salary_range')->nullable();
            $table->enum('status', ['open', 'closed']);
            $table->string('location');
            $table->string('title');
            $table->enum('employment_type', ['full-time', 'part-time', 'freelance']);
            $table->integer('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
