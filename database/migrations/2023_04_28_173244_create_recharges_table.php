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
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('num_tel')->unsigned();
            $table->foreign('num_tel')->references('num_tel')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('num_carte');
            $table->dateTime('date_recharge');
            $table->string('cout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recharges');
    }
};
