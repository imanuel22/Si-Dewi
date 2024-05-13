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
        Schema::table('tb_destinasiwisata', function (Blueprint $table) {
            $table->foreign(['id_desawisata'], 'fk_desawisata_destinasi')->references(['id_desawisata'])->on('tb_desawisata')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_kategoridestinasi'], 'fk_kategori_destinasi')->references(['id_kategoridestinasi'])->on('tb_kategoridestinasi')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_destinasiwisata', function (Blueprint $table) {
            $table->dropForeign('fk_desawisata_destinasi');
            $table->dropForeign('fk_kategori_destinasi');
        });
    }
};
