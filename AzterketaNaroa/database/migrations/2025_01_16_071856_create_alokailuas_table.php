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
        Schema::create('alokailuas', function (Blueprint $table) {
            $table->id();
            $table->string('izena');
            $table->unsignedBigInteger('etxea_id');
            $table->foreign('etxea_id')->references('id')->on('etxeas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alokailuas');
    }
};
