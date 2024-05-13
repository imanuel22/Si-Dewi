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
        Schema::table('tb_reviewdestinasi', function (Blueprint $table) {
            $table->foreign(['id_akun'], 'fk_akun_review')->references(['id_akun'])->on('tb_akun')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_destinasiwisata'], 'fk_destinasi_review')->references(['id_destinasiwisata'])->on('tb_destinasiwisata')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_reviewdestinasi', function (Blueprint $table) {
            $table->dropForeign('fk_akun_review');
            $table->dropForeign('fk_destinasi_review');
        });
    }
};
