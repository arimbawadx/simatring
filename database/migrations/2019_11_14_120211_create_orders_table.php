<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_produk');
            $table->integer('jumlah_order');
            $table->integer('jumlah_pembayaran');
            $table->string('status_order');
            $table->timestamps();
        });

        // Schema::table('orders', function (Blueprint $table) {
        //     $table->foreign('id_user')
        //             ->references('id')
        //             ->On('users')
        //             ->onDelete('cascade')
        //             ->onUpdate('cascade');
        // });

        // Schema::table('orders', function (Blueprint $table) {
        //     $table->foreign('id_produk')
        //             ->references('id')
        //             ->On('produks')
        //             ->onDelete('cascade')
        //             ->onUpdate('cascade');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        // Schema::dropIfExists('users');
        // Schema::dropIfExists('produks');
    }
}
