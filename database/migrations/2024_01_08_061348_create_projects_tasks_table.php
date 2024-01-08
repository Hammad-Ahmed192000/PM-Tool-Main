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
        Schema::create('projects_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('projectId');
            $table->text('description');
            $table->integer('assignedTo');
            $table->enum('assignedStatus', ['active', 'inactive','completed', 'deleted'])->default('active');
            $table->string('startDate');
            $table->string('endDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_tasks');
    }
};
