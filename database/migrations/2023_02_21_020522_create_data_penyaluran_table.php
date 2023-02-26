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
        Schema::create('data_penyaluran', function (Blueprint $table) {
            $table->id('id_data_penyaluran');
            $table->dateTime('tanggal_penyaluran')->required();
            $table->string('status_penyaluran',20)->required();
            $table->integer('gas_dipesan')->required()->unsigned();
            $table->integer('gas_dikirim')->required()->unsigned();
            $table->string('keterangan_penyaluran');
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
        Schema::dropIfExists('data_penyaluran');
    }
};
