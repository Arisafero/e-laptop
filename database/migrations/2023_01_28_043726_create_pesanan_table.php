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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("pelanggan_id");
            $table->bigInteger("keranjang_id");
            $table->bigInteger("bank_id");
            $table->text("catatan");
            $table->bigInteger("jenis_pengiriman");
            $table->enum("metode_bayar",["transfer_bank","cod"]);
            $table->decimal("total_ongkir");
            $table->decimal("total_tagihan");
            $table->enum("status_bayar",["paid","unpaid"]);
            $table->dateTime("tgl_bayar");
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
        Schema::dropIfExists('keranjang');
    }
};
