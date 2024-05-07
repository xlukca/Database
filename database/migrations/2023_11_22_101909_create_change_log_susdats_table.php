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
        Schema::create('change_log_susdats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('susdat_id')->references('id')->on('susdats');;
            $table->string('item');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->foreignId('user_id')->references('id')->on('users'); // Kto zmenu spravil
            $table->timestamps(); // Kedy zmenu spravil
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('change_log_susdats');
    }
};
