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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('Users')->onDelete('set null');
            $table->string('no_kk', 16)->nullable()->unique();
            $table->string('no_nik', 16)->nullable()->unique();
            $table->enum('religion', ['Islam', 'Kristen', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('place_born', 30);
            $table->date('date_born');
            $table->enum('jk', ['L', 'P']);
            $table->string('road', 100);
            $table->string('district', 30);
            $table->string('city', 30);
            $table->string('pc', 15);
            $table->enum('marital', ['Belum Menikah', 'Menikah', 'Cerai']);
            $table->integer('child_total')->nullable();
            $table->string('emergency_contact', 15);
            $table->string('relation_contact', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
