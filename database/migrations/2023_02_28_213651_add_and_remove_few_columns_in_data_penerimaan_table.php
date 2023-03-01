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
        Schema::table('data_penerimaan', function (Blueprint $table) {
            $table->dropColumn(['tanggal_penerimaan','gas_diterima']);
            $table->integer('minggu_1')->unsigned();
            $table->integer('minggu_2')->unsigned();
            $table->integer('minggu_3')->unsigned();
            $table->integer('minggu_4')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_penerimaan', function (Blueprint $table) {
            $table->date('tanggal_penerimaan')->required()->after('status_penerimaan');
            $table->integer('tanggal_penerimaan')->required()->unsigned();
            $table->dropColumn(['minggu_1','minggu_2','minggu_3','minggu_4']);
        });
    }
};
