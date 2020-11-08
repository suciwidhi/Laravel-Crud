<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembinaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembinaan', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_daerah');
            $table->dateTime('Tanggal');
            $table->text('Kegiatan');
            $table->string('Gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembinaan');
    }
}
