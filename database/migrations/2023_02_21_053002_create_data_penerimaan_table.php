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
        Schema::create('data_penerimaan', function (Blueprint $table) {
            $table->id('id_data_penerimaan');
            $table->dateTime('tanggal_penerimaan')->required();
            $table->string('status_penerimaan',20)->required();
            $table->integer('gas_diterima')->required()->unsigned();
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
        Schema::dropIfExists('data_penerimaan');
    }
};
