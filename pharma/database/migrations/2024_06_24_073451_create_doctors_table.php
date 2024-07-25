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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('hospital')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('marrital_status', ['married', 'unmarried'])->nullable();
            $table->string('reg_no')->nullable();
            $table->string('qualification')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone1')->nullable()->unique();
            $table->string('phone2')->nullable()->unique();
            $table->string('phone3')->nullable()->unique();
            $table->date('dob')->nullable();
            $table->date('anniversary')->nullable();
            $table->foreignId('city_id')->nullable()->references('id')
            ->on('cities')
            ->onDelete('cascade');
            $table->foreignId('state_id')->nullable()->references('id')
            ->on('states')
            ->onDelete('cascade');
            $table->foreignId('doctor_category_id')->nullable()->references('id')
            ->on('doctor_categories')
            ->onDelete('cascade');
            $table->foreignId('division_id')->nullable()->references('id')
            ->on('divisions')
            ->onDelete('cascade');
            $table->foreignId('location_id')->nullable()->references('id')
            ->on('locations')
            ->onDelete('cascade');
            $table->foreignId('speciality_id')->nullable()->references('id')
            ->on('specialities')
            ->onDelete('cascade');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
