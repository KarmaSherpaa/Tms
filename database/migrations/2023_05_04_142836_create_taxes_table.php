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
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('mothly_salary');
            $table->tinyInteger('user_id');
            $table->integer('epf_contribution')->default(0);
            $table->integer('ssf_contribution')->default(0);
            $table->integer('sit_contribution')->default(0);
            $table->integer('cit_contribution')->default(0);
            $table->integer('life_insurance')->default(0);
            $table->integer('health_insurance')->default(0);
            $table->integer('house_insurance')->default(0);
            $table->integer('donation')->default(0);
            $table->integer('other_allowed_deduction')->default(0);
            $table->integer('medical_expences')->default(0);
            $table->integer('gross_income')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxes');
    }
};
