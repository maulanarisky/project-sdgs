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
        Schema::create('program_pelaku_usahas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('indikator_id')->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode_pojk');
            $table->string('kegiatan_pojk');
            $table->string('no_urut');
            $table->string('kegiatan');
            $table->string('indikator_capaian');
            $table->string('satuan');
            $table->string('waktu');
            $table->string('target');
            $table->string('capaian');
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
        Schema::dropIfExists('program_pelaku_usahas');
    }
};