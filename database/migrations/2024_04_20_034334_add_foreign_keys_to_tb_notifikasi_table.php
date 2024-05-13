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
        Schema::table('tb_notifikasi', function (Blueprint $table) {
            $table->foreign(['id_akun'], 'tb_notifikasi_id_akun')->references(['id_akun'])->on('tb_akun')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_notifikasi', function (Blueprint $table) {
            $table->dropForeign('tb_notifikasi_id_akun');
        });
    }
};
