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
        Schema::create('tb_desafavorit', function (Blueprint $table) {
            $table->integer('id_desafavorit')->primary();
            $table->integer('id_desawisata')->index('fk_desawisata_desafavorit_idx');
            $table->integer('id_akun')->index('fk_akun_desafavorit_idx');
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
        Schema::dropIfExists('tb_desafavorit');
    }
};
