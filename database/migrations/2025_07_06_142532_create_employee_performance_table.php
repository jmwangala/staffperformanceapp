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
        Schema::create('employee_performance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('kpi_id')->constrained('kpis');
            $table->foreignId('performance_period_id')->constrained('performance_periods');
            //$table->foreignId('employee_target_id')->constrained('employee_targets');
            $table->decimal('actual');
            $table->decimal('computed');
            $table->string('employee_comments');
            $table->decimal('supervisor_score');
            $table->string('supervisor_comments');
            $table->decimal('final_score');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_performance');
    }
};
