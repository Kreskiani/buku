<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('TRAN_ADMI_Username', 100);
            $table->string('TRAN_USER_Username', 100);
            $table->string('TRAN_Date', 100);
            $table->string('TRAN_BOOK_ID', 100);
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
        Schema::drop('transaksi');    
    }
}
