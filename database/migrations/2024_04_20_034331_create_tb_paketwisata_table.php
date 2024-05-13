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
        Schema::create('tb_paketwisata', function (Blueprint $table) {
            $table->integer('id_paketwisata')->primary();
            $table->text('deskripsi');
            $table->string('nama', 50);
            $table->text('gambar');
            $table->integer('harga');
            $table->integer('id_desawisata')->index('fk_desawisata_paket_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_paketwisata');
    }
};
