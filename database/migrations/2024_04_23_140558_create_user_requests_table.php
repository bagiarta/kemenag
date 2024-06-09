<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRequestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_requests', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('req_no')->nullable();
            $table->string('layanan');
            $table->string('email');
            $table->string('nama');
            $table->string('telepon');
            $table->string('alamat');
            $table->text('remarks');
            $table->string('files');
            $table->string('status')->default('proccess');
            $table->text('reason')->nullable();
            $table->timestamps();
            $table->foreign('nik')->on('users')->references('nik')->onDelete('CASCADE')->onUpdate('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_requests');
    }
}
