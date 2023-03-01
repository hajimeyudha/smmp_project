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
        Schema::table('data_penyaluran', function (Blueprint $table) {
            $table->date('tempo_penyaluran')->required()->after('tanggal_penyaluran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_penyaluran', function (Blueprint $table) {
            $table->dropColumn('tempo_penyaluran');
        });
    }
};
