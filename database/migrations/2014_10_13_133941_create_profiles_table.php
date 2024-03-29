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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('headline')->nullable();
            $table->string('location')->nullable();

            $table->foreignId('education_id')->nullable()->constrained('educations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('experience_id')->nullable()->constrained('experiences')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('industry_id')->nullable()->constrained('industry')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
