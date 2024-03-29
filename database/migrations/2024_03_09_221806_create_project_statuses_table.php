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
        Schema::create('projects_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->integer('project_id')->default(1);
            $table->integer('order')->default(1);
            $table->integer('status')->default(true);
            $table->integer('filed_by')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_statuses');
    }
};
