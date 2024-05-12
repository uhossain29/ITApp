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
            $table->string('std_id');
            $table->string('std_name');
            $table->longText('std_fname')->nullable();
            $table->string('std_mname')->nullable();
            $table->string('std_dob')->nullable();
            $table->string('std_phone')->nullable();
            $table->string('std_email')->nullable();
            $table->string('std_nid')->nullable();
            $table->string('std_program')->nullable();
            $table->string('std_batch')->nullable();
            $table->string('std_lsemester')->nullable();
            $table->string('std_cgpa')->nullable();
            $table->string('std_tcredit')->nullable();
            $table->string('std_certificate_no')->nullable();
            $table->string('std_certificate_issue')->nullable();
            $table->string('std_publication_date')->nullable();
            $table->string('std_photo')->default('default.png');
            $table->softDeletes();
            $table->timestamps();
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
