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
        Schema::create('email_sents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sending_user_id')->nullable();
            $table->unsignedBigInteger('receiving_user_id')->nullable();
            $table->boolean('displayed')->default(false);
            $table->text('body',300);
            $table->timestamps();
            $table->foreign('sending_user_id')->references('id')->on('users');
            $table->foreign('receiving_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_sents');
    }
};
