<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInexTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incexp_transaction', function (Blueprint $table) {
            $table->increments('incexpTransacID');
            $table->integer('projectsID')->nullable()->unsigned()->index();
            $table->foreign('projectsID')->references('projectsID')->on('projects')->onDelete('CASCADE')->onUpdate('No Action');
            $table->integer('incexpID')->nullable()->unsigned()->index();
            $table->foreign('incexpID')->references('incexpID')->on('incexp')->onDelete('CASCADE')->onUpdate('No Action');
            $table->double('amountIN')->default(0);
            $table->double('amountOut')->default(0);
            $table->string('drCR', 5)->default('IN');//CASH OUT OR CASH IN
            $table->string('transactionType', 20)->default('CASH');//CASH or chack or other
            $table->string('description')->nullable();
            $table->integer('userID')->nullable()->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('No Action')->onUpdate('No Action');
            $table->softDeletes();
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
        Schema::dropIfExists('incexp_transaction');
    }
}
