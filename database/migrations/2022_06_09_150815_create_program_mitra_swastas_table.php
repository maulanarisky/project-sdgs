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
        Schema::create('program_mitra_swastas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_id')->constrained('tahuns')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('indikator_id')->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kegiatan_id')->constrained('kegiatans')->onUpdate('cascade')->onDelete('cascade');
            //  $table->foreignId('program_id')->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name_outputkegiatan')->nullable();
            $table->string('satuan')->nullable();
            $table->string('target_tahun')->nullable();
            $table->string('realisasi_target_sem_1')->nullable();
            $table->string('realisasi_target_sem_2')->nullable();
            $table->string('alokasi_anggaran')->nullable();
            $table->string('realisasi_anggaran_sem_1')->nullable();
            $table->string('realisasi_anggaran_sem_2')->nullable();
            $table->string('sumber_pendanaan')->nullable();
            $table->string('lokasi_pelaksanaan_kegiatan')->nullable();
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
        Schema::dropIfExists('program_mitra_swastas');
    }
};
