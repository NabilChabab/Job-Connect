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
        Schema::create('job_offres', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('contracte')->nullable();
            $table->decimal('salary',5,2)->nullable();
            $table->integer('n_experiences')->nullable();
            $table->foreignId('companie_id')->constrained('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offres');
    }
};
