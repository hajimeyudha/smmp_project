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
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->id('id_penerimaan');
            $table->unsignedBigInteger('id_stok');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_data_penerimaan');
            $table->timestamps();

            $table->foreign('id_user')->nullable()->references('id')->on('users');
            $table->foreign('id_stok')->nullable()->references('id_stok')->on('stokgas');
            $table->foreign('id_supplier')->nullable()->references('id_supplier')->on('suppliers');
            $table->foreign('id_data_penerimaan')->nullable()->references('id_data_penerimaan')->on('data_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaan');
        Schema::table('penerimaan', function (Blueprint $table) {
            $table->dropForeign('penerimaan_users_id_user_foreign');
            $table->dropForeign('penerimaan_stokgas_id_stok_foreign');
            $table->dropForeign('penerimaan_suppliers_id_supplier_foreign');
            $table->dropForeign('penerimaan_data_penerimaan_id_data_penerimaan_foreign');
        });
    }
};
