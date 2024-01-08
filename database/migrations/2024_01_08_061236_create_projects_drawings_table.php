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
        Schema::create('projects_drawings', function (Blueprint $table) {
            $table->id();
            $table->integer('projectId');
            $table->string('title');
            $table->string('buildingNo');
            $table->string('floor');
            $table->string('subject');
            $table->string('revisionNo');
            $table->string('revisionDate');
            $table->string('format');
            $table->integer('lastEdit');
            $table->string('endDate');
            $table->string('comment');
            $table->string('statusDrawing');
            $table->string('yardStick');
            $table->string('drawing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_drawings');
    }
};
