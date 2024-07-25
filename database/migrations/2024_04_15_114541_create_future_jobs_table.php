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
        Schema::create('future_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_no')->unique()->nullable();
            $table->foreignId('job_id')->nullable()->references('id')
            ->on('jobs')
            ->onDelete('cascade');
            $table->date('job_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('notification')->nullable();
             $table->enum('status', ['active', 'inactive'])->default("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('future_jobs');
    }
    
};
