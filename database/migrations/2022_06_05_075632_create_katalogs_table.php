<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kategori_id')->unsigned()->nullable();
            $table->string('nama_katalog');
            $table->integer('harga');
            $table->text('description');
            $table->string('link_referensi');
            $table->string('foto')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategoris')
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
        Schema::dropIfExists('katalogs');
    }
}
