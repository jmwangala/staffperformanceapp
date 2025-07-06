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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('title', ['Mr', 'Ms', 'Mrs', 'Dr', 'Ps', 'Fr', 'Sis', 'Bro']);
            $table->char('staff_id_no', '6'); //M00125
            $table->string('fname', 50);
            $table->string('mname', 50);
            $table->string('lname', 50);
            $table->date('dob');
            $table->enum('gender', ['male', 'female']);
            $table->foreignId('highest_education_id')->constrained('highest_education');
            $table->foreignId('kin_id')->constrained('kin');
            $table->char('nin', 14);
            $table->char('tin', 10);
            $table->char('nssf', 13);
            $table->string('email', 50);
            $table->char('phone1', 15);
            $table->char('phone2', 15);
            $table->date('hire_date');
            $table->foreignId('position_id')->constrained('positions')->cascadeOnDelete();
            $table->foreignId('station_id')->constrained('stations');
            $table->string('passport_photo');
            $table->string('nin_photo');
            $table->string('lc_letter_photo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
