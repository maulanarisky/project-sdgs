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
        Schema::create('program_kab_kotas', function (Blueprint $table) {
           $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_id')->nullable()->constrained('tahuns')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kabkota_id')->constrained('kabkotas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('target_tahun')->nullable();
            $table->string('realisasi_target_sem_1')->nullable();
            $table->string('realisasi_target_sem_2')->nullable();
            $table->string('alokasi_anggaran')->nullable();
            $table->string('realisasi_anggaran_sem_1')->nullable();
            $table->string('realisasi_anggaran_sem_2')->nullable();
            $table->string('lokasi_pelaksanaan_kegiatan')->nullable();
            $table->string('sumber_pendanaan')->nullable();
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
        Schema::dropIfExists('program_kab_kotas');
    }
};
