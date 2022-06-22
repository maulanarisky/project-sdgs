<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('indikator_id')->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_id')->constrained('tahuns')->onUpdate('cascade')->onDelete('cascade'); 
            $table->float('baseline')->nullable();
            $table->float('target_awal')->nullable();
            $table->float('capaian')->nullable();
            $table->enum('status', ['akan_tercapai', 'perlu_perhatian_kusus', 'tercapai'])->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capaians');
    }
};
