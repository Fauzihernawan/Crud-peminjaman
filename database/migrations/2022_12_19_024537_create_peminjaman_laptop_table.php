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
        Schema::create('peminjaman_laptop', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('no_laptop');
            $table->string('nama_peminjaman');
            $table->dateTime('tanggal_peminjaman');
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
        Schema::dropIfExists('peminjaman_laptop');
    }
};
