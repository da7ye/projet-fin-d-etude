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
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('num_tel')->unsigned();
            $table->foreign('num_tel')->references('num_tel')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('autre_num');
            $table->dateTime('date_sms');
            $table->string('cout');
            $table->string('balance_apres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms');
    }
};
