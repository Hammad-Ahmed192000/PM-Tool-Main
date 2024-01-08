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
        Schema::create('projects_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('projectId');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('statusInvoice');
            $table->string('statusBuilding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_invoices');
    }
};
