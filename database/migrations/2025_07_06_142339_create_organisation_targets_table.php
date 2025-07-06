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
        Schema::create('organisation_targets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kpi_id')->constrained('kpis');
            $table->char('period', 10); //of the format WW-MM-YYYY where WW is for Week
            $table->decimal('target');
            $table->string('justification');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisation_targets');
    }
};
