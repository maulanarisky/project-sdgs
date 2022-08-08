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
        Schema::create('kabkotas', function (Blueprint $table) {
            $table->id();
            $table->string('program_kabkota');
            $table->string('kegiatan_kabkota');
            $table->string('kode_subkegiatan_kabkota');
            $table->string('name_subkegiatan_kabkota');
            $table->string('indikator_kabkota');
            $table->string('satuan');
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
        Schema::dropIfExists('kabkotas');
    }
};
