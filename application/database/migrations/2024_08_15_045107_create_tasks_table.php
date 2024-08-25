<?php

use App\Enums\StatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration');
            $table->dateTime('start_date');
            $table->dateTime('due_date')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->enum('status', StatusEnum::toArray())->default(StatusEnum::pending());
            $table->timestamps();
            $table->unsignedBigInteger('project_id')->references('id')->on('projects')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('task_owner')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
