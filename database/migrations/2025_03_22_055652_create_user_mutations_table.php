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
        Schema::create('user_mutations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('Users')->onDelete('cascade');
            $table->foreignId('work_area_new')->nullable()->constrained('schools')->onDelete('set null');
            $table->enum('employe_type_new', ['GT', 'GTT', 'KT', 'KTT']);
            $table->year('start_duty');
            $table->year('end_duty');
            $table->enum('status_new', ['Aktif', 'Nonaktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mutations');
    }
};
