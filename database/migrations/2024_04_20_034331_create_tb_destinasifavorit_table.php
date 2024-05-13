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
        Schema::create('tb_destinasifavorit', function (Blueprint $table) {
            $table->integer('id_destinasifavorit')->primary();
            $table->integer('id_destinasiwisata')->index('fk_destinasi_favorit_idx');
            $table->integer('id_akun')->index('fk_akun_destinasifavorit_idx');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_destinasifavorit');
    }
};
