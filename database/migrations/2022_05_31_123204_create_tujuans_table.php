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
        Schema::create('tujuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pilar_id')
                    ->constrained('pilars')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode_tujuan')->unique();
            $table->string('name');
            $table->string('deskripsi');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('tujuans');
    }
};
