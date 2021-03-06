<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Beli, Jual, Refund
    public function up()
    {
        Schema::create('type_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150)->unique();
            $table->text('description');
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
        Schema::dropIfExists('type_transaction');
    }
}
