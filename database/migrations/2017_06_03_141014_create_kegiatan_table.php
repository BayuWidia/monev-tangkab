<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('program_id')->unsigned();
            $table->string('rekening', 16);
            $table->string('nama');
            $table->bigInteger('nilai_1');
            $table->bigInteger('nilai_2');
            $table->bigInteger('nilai_3');
            $table->bigInteger('nilai_4');
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('program');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
