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
        Schema::create('tb_assetdestinasi', function (Blueprint $table) {
            $table->integer('id_assetdestinasi')->primary();
            $table->text('link');
            $table->enum('tipe', ['Foto', 'Video']);
            $table->integer('id_destinasiwisata')->index('fk_destinasiwisata_asset_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_assetdestinasi');
    }
};
