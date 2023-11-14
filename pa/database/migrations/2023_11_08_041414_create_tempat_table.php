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
        Schema::create('tempat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('nama')->unique();
            $table->string('alamat');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->string('gambar');
            $table->string('link_maps')->nullable();;
            $table->string('kontak')->nullable();;
            $table->timestamps();

            $table->foreign('admin_id')-> references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempat');
    }
};
