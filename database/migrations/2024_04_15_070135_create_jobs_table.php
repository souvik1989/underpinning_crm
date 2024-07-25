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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreignId('parent_id')->nullable()->constrained('jobs')->onDelete('cascade');
            $table->string('job_no')->unique()->nullable();
            $table->string('area')->nullable();
            $table->string('customer_name')->nullable();
            $table->date('job_date')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('hours')->nullable();
            $table->enum('gst', ['yes', 'no'])->default("yes");
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->text('comment')->nullable();
            $table->enum('status', ['active', 'inactive'])->default("active");
            $table->tinyInteger('future')->default(0);
            $table->integer('notification')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
