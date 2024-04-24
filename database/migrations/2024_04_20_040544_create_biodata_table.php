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
            // $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('ttl');
            $table->string('gender');
            $table->string('agama');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('pekerjaan');
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
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
