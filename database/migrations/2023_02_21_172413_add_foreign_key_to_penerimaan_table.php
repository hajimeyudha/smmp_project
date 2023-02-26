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
        Schema::table('penerimaan', function (Blueprint $table) {
            $table->foreign('id_user','foreign_key_1')->references('id')->on('users');
            $table->foreign('id_supplier','foreign_key_2')->references('id_supplier')->on('suppliers');
            $table->foreign('id_stok','foreign_key_3')->references('id_stok')->on('stokgas');
            $table->foreign('id_data_penerimaan','foreign_key_4')->references('id_data_penerimaan')->on('data_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penerimaan', function (Blueprint $table) {
            $table->dropForeign('foreign_key_1');
            $table->dropForeign('foreign_key_2');
            $table->dropForeign('foreign_key_3');
            $table->dropForeign('foreign_key_4');
        });
    }
};
