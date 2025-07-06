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
        Schema::create('performance_periods', function (Blueprint $table) {
            $table->id();
            $table->char('period', 10);  //format WK-MM-YYYY for weekly periods
            $table->date('date_from');
            $table->date('date_to');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_periods');
    }
};
