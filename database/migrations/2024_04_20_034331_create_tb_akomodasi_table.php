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
        Schema::create('tb_akomodasi', function (Blueprint $table) {
            $table->integer('id_akomodasi')->primary();
            $table->string('nama', 25);
            $table->text('gambar');
            $table->string('kategori', 50);
            $table->integer('id_desawisata')->index('fk_desawisata_akomodasi_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_akomodasi');
    }
};
