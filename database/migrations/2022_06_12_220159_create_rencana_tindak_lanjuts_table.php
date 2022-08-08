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
        Schema::create('rencana_tindak_lanjuts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('indikator_id')->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->text('rtk');
            $table->string('pelaksana');
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
        Schema::dropIfExists('rencana_tindak_lanjuts');
    }
};
