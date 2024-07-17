<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('participaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gimnasta_id');
            $table->unsignedBigInteger('competicion_id');
            $table->string('resultado');
            $table->timestamps();
    
            $table->foreign('gimnasta_id')->references('id')->on('gimnastas')->onDelete('cascade');
            $table->foreign('competicion_id')->references('id')->on('competiciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participaciones');
    }
};
