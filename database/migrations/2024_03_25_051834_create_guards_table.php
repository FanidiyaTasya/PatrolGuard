<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('guards', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();
            $table->string('fullname_guard', 100);
            $table->date('birth_date');
            $table->string('email_guard', 50);
            $table->string('password_guard', 100);
            $table->string('phone_number', 20);
            $table->string('address');
            $table->text('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('guards');
    }
};
