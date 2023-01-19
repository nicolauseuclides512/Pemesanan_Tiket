<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal_kunjungan');
            $table->string('pengunjung_dewasa');
            $table->string('pengunjung_anak_anak');
            $table->string('total_bayar');
            $table->boolean('persetujuan');
            $table->string('id_pemesan');
            $table->string('id_tempat_wisata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
