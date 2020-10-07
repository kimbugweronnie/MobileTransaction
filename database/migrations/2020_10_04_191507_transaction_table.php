<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('eWallet_name');
            $table->char('eWallet_phoneNumber');
            $table->bigInteger('Transfer_Amount');
            $table->char('customer_phoneNumber');
            $table->bigInteger('eWalletaccounts_id');
            $table->bigInteger('customers_id');

            $table->string('Status');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
