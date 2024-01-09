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
        Schema::create('project_activity', function (Blueprint $table) {
            $table->id();
            $table->integer('projectId');
            $table->string('title');
            $table->text('description');
            $table->integer('assignedTo');
            $table->enum('assignedStatus', ['progress','inactive','completed', 'deleted']);
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
        Schema::dropIfExists('project_activity');
    }
};
