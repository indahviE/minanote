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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('admin_id');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('jml_pinjam');
            $table->string('status');
            $table->string('entitas_peminjam');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->foreign('guru_id')->references('id')->on('guru');
            $table->foreign('barang_id')->references('id')->on('barang');
            $table->foreign('admin_id')->references('id')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
