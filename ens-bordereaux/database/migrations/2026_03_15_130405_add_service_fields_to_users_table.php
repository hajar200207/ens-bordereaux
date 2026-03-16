<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('username')->unique()->nullable()->after('email');
            $table->foreignId('service_id')->nullable()->after('password')->constrained()->nullOnDelete();
            $table->boolean('is_active')->default(true)->after('service_id');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('service_id');
            $table->dropColumn(['first_name', 'last_name', 'username', 'is_active']);
        });
    }
};
