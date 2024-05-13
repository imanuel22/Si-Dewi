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
        Schema::create('tb_admindesa', function (Blueprint $table) {
            $table->integer('id_desawisata')->index('fk_desawisata_admindesa_idx');
            $table->integer('id_akun')->index('fk_akun_admindesa_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_admindesa');
    }
};
