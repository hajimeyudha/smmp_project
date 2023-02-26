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
        Schema::create('stokgas', function (Blueprint $table) {
            $table->id('id_stok');
            $table->string('nama_stok',100)->required();
            $table->string('jenis_stok',100)->required();
            $table->integer('jml_onsite')->required()->unsigned();
            $table->integer('jml_offsite')->required()->unsigned();
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
        Schema::dropIfExists('stokgas');
    }
};
