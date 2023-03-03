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
        Schema::table('penyaluran', function (Blueprint $table) {
            $table->foreign('id_user')->nullable()->references('id')->on('users')->change();
            $table->foreign('id_stok')->nullable()->references('id_stok')->on('stokgas')->change();
            $table->foreign('id_pangkalan')->nullable()->references('id_pangkalan')->on('pangkalan')->change();
            $table->foreign('id_data_penyaluran')->nullable()->references('id_data_penyaluran')->on('data_penyaluran')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyaluran', function (Blueprint $table) {
            $table->dropForeign('penyaluran_users_id_user_foreign');
            $table->dropForeign('penyaluran_stokgas_id_stok_foreign');
            $table->dropForeign('penyaluran_pangkalan_id_pangkalan_foreign');
            $table->dropForeign('penyaluran_data_penyaluran_id_data_penyaluran_foreign');
        });
    }
};
