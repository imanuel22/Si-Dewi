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
        Schema::create('tb_reviewdestinasi', function (Blueprint $table) {
            $table->integer('id_reviewdestinasi');
            $table->integer('id_akun')->index('fk_akun_review_idx');
            $table->integer('id_destinasiwisata')->index('fk_destinasi_review_idx');
            $table->integer('rating');
            $table->text('review');
            $table->dateTime('tgl_upload');
            $table->boolean('setujui');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_reviewdestinasi');
    }
};
