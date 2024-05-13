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
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->integer('id_berita')->primary();
            $table->string('judul', 50);
            $table->text('gambar');
            $table->integer('penulis');
            $table->text('isi_berita');
            $table->string('slug', 50);
            $table->dateTime('tgl_upload');
            $table->integer('id_desawisata')->index('fk_desawisata_berita_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_berita');
    }
};
