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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nip', 10)->unique()->after('id');
            $table->enum('role', ['superadmin', 'admin', 'pengurus', 'kepala sekolah', 'operator sekolah', 'pegawai',])->after('password');
            $table->enum('status', ['aktif', 'nonaktif'])->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nip', 'role', 'status']);
        });
    }
};
