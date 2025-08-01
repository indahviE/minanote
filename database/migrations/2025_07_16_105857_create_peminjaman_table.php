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
            $table->unsignedBigInteger('siswa_id')->nullable();
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('admin_id');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('jml_pinjam');
            $table->string('status');
            $table->string('entitas_peminjam');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');;
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');;
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade');;
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
