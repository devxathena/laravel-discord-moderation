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
        Schema::create('channel_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('channel_id')->nullable();
            $table->foreign('channel_id')->references('id')->on('channels')->cascadeOnDelete();
            $table->unsignedBigInteger('guild_permission_id')->nullable();
            $table->foreign('guild_permission_id')->references('id')->on('guild_permissions')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel_permissions');
    }
};
