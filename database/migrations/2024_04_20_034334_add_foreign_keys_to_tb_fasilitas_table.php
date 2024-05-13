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
        Schema::table('tb_fasilitas', function (Blueprint $table) {
            $table->foreign(['id_destinasiwisata'], 'fk_destinasi_fasilitas')->references(['id_destinasiwisata'])->on('tb_destinasiwisata')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_fasilitas', function (Blueprint $table) {
            $table->dropForeign('fk_destinasi_fasilitas');
        });
    }
};
