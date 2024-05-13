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
        Schema::create('tb_informasi', function (Blueprint $table) {
            $table->integer('id_informasi')->primary();
            $table->text('gambar');
            $table->text('alamat');
            $table->string('nama', 25);
            $table->string('no_telp', 15);
            $table->string('no_wa', 15);
            $table->string('facebook', 100);
            $table->string('instagram', 100);
            $table->string('website', 100);
            $table->string('email', 100);
            $table->integer('id_desawisata')->index('fk_desawisata_informasi_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_informasi');
    }
};
