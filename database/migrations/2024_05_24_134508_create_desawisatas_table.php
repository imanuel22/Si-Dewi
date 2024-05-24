<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_desawisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama',25);
            $table->string('slug',35);
            $table->text('gambar');
            $table->text('alamat');
            $table->text('deskripsi');
            $table->text('maps');
            $table->enum('kategori',['Rintisan', 'Berkembang', 'Maju', 'Mandiri']);
            $table->enum('kabupaten',['Badung', 'Bangli', 'Jembrana', 'Klungkung', 'Karangasem', 'Gianyar', 'Tabanan', 'Denpasar', 'Buleleng']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_desawisata');
    }
};
