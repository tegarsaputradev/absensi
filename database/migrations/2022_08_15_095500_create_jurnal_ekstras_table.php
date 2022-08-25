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
        Schema::create('jurnal_ekstras', function (Blueprint $table) {
            $table->id();
            $table->string('jurnal_id');
            $table->string('user_username');
            $table->date('tanggal_jurnal');
            $table->string('kelas_ekstra');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('sub_bab');
            $table->string('deskripsi_kegiatan', 3000);
            $table->foreign('jurnal_id')->references('id')->on('jurnals')->onDelete('cascade');
            $table->foreign('user_username')->references('username')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnal_ekstras');
    }
};