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
        Schema::create('kins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();
            $table->enum('title', ['Mr', 'Ms', 'Mrs', 'Dr', 'Ps', 'Fr', 'Sis', 'Bro']);
            $table->string('fname', 50);
            $table->string('mname', 50);
            $table->string('lname', 50);
            $table->string('email', 50);
            $table->char('phone1', 15);
            $table->char('phone2', 15);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kins');
    }
};
