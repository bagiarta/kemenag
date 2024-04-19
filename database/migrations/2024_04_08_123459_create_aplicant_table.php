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
        Schema::create('aplicant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aplicant_id');
            $table->string('user_id')->unique();
            $table->string('aplicant_name');
            $table->string('email')->unique();
            $table->string('mobile_no');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplicant');
    }
};
