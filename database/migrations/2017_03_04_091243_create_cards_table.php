<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_type');
            $table->integer('card_brand');
            $table->string('valid_until');
            $table->string('origin_country');
            $table->float('original_price',8,2);
            $table->string('currency');
            $table->integer('discount');
            $table->float('sell_price',8,2);
            $table->string('card_number');
            $table->string('card_PIN');
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
        Schema::drop('cards');
    }
}
