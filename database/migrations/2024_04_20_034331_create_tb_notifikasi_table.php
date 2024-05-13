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
        Schema::create('tb_notifikasi', function (Blueprint $table) {
            $table->integer('id_notifkasi', true);
            $table->text('deskripsi');
            $table->string('status', 10);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('id_akun')->index('tb_notifikasi_id_akun_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_notifikasi');
    }
};
