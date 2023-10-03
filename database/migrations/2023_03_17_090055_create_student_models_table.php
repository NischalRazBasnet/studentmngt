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
        Schema::create('student_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('program_id');
            $table->string ('fname');
            $table->string ('level');
            $table->string('programName');
            $table->string('sem');
            $table->string('contact');
            $table->string('address');
            // $table->foreign('program_id')->references('id')->on('program_models');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_models');
    }
};
