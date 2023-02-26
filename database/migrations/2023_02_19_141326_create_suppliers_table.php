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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('id_supplier');
            $table->string('nama_supplier',100)->required();
            $table->integer('alokasi_3kg')->required()->unsigned();
            $table->integer('alokasi_5kg_bg')->required()->unsigned();
            $table->integer('alokasi_12kg')->required()->unsigned();
            $table->integer('alokasi_12kg_bg')->required()->unsigned();
            $table->integer('alokasi_50kg')->required()->unsigned();
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
        Schema::dropIfExists('suppliers');
    }
};
