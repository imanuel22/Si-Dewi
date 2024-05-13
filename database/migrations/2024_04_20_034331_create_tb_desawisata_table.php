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
        Schema::create('tb_desawisata', function (Blueprint $table) {
            $table->integer('id_desawisata')->primary();
            $table->text('gambar');
            $table->text('alamat');
            $table->string('nama', 25);
            $table->text('deskripsi');
            $table->text('maps');
            $table->enum('kategori', ['Rintisan', 'Berkembang', 'Maju', 'Mandiri']);
            $table->enum('kabupaten', ['Badung', 'Bangli', 'Jembrana', 'Klungkung', 'Karangasem', 'Gianyar', 'Tabanan', 'Denpasar', 'Buleleng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_desawisata');
    }
};
