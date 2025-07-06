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
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('physical_address', 250);
            $table->string('postal_address', 50);
            $table->string('website', 100);
            $table->string('email', 100);
            $table->string('phone1', 15);
            $table->string('phone2', 15);
            $table->boolean('active')->default(false);
            $table->string('tag_line', 150);
            $table->char('tin', 10);
            $table->char('nssf_no', 13);
            $table->string('registration_no', 150);
            $table->string('app_key', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisations');
    }
};
