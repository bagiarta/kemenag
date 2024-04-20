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
        Schema::create('biodata', function (Blueprint $table) {
            $table->string('nik')->primary();
            $table->string('nama');
            $table->string('email')->unique();
            $table->date('ttl');
            $table->string('gender');
            $table->string('agama');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('pekerjaan');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
