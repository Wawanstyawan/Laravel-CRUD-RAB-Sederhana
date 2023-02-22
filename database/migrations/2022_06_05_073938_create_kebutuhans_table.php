<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKebutuhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebutuhans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kegiatan_id')->unsigned()->nullable();
            $table->bigInteger('kategori_id')->unsigned()->nullable();
            $table->bigInteger('katalog_id')->unsigned()->nullable();
            $table->string('urn_kebutuhan');
            $table->integer('harga_satuan');
            $table->integer('kuantitas');
            $table->timestamps();

            $table->foreign('kegiatan_id')
            ->references('id')
            ->on('kegiatans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebutuhans');
    }
}
