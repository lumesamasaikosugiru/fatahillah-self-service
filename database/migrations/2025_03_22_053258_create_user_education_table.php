<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->enum('edu_level', ['SD', 'SMP/s', 'SMA/s', 'S1', 'S2', 'S3']);
            $table->string('name_instation')->nullable();
            $table->string('major', 30)->nullable();
            $table->year('start_year')->nullable();
            $table->year('gradu_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_education');
    }
};
