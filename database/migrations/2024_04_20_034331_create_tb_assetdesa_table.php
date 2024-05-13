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
        Schema::create('tb_assetdesa', function (Blueprint $table) {
            $table->integer('id_assetdesa')->primary();
            $table->text('link');
            $table->enum('tipe', ['Foto', 'Video']);
            $table->integer('id_desawisata')->index('fk_desawisata_asset_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_assetdesa');
    }
};
