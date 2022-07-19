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
        Schema::create('pelaporan_pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tujuan_id')->nullable()->constrained('tujuans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name_program');
            $table->string('lokasi');
            $table->date('waktu');
            $table->string('latar_belakang');
            $table->string('proses_pelaksanaan');
            $table->string('Hasil');
            $table->string('dampak');
            $table->string('tantangan');
            $table->string('pembelajaran');
            $table->string('peluang_replikasi');
            $table->string('file');
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
        Schema::dropIfExists('pelaporan_pembelajarans');
    }
};
