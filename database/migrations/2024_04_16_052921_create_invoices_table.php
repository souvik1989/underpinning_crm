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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->nullable()->references('id')
            ->on('jobs')
            ->onDelete('cascade');
            $table->foreignId('future_job_id')->nullable()->references('id')
            ->on('future_jobs')
            ->onDelete('cascade');
            $table->foreignId('quote_id')->nullable()->references('id')
            ->on('quotes')
            ->onDelete('cascade');
            $table->string('invoice_no')->unique()->nullable();
            $table->tinyInteger('mail_send')->default(0);
            $table->enum('invoice_status', ['mailed', 'paid','due'])->nullable();
            $table->enum('status', ['active', 'inactive'])->default("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
