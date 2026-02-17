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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('points')->default(0)->after('remember_token');
            $table->unsignedBigInteger('tier_id')->nullable()->after('points');
            $table->string('referral_code')->unique()->nullable()->after('tier_id');
            $table->timestamp('last_points_update')->nullable()->after('referral_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['points', 'tier_id', 'referral_code', 'last_points_update']);
        });
    }
};
