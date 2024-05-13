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
        Schema::table('tb_paketwisata', function (Blueprint $table) {
            $table->foreign(['id_desawisata'], 'fk_desawisata_paket')->references(['id_desawisata'])->on('tb_desawisata')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_paketwisata', function (Blueprint $table) {
            $table->dropForeign('fk_desawisata_paket');
        });
    }
};
