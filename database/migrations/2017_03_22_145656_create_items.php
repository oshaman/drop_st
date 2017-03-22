<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('img');
            $table->string('description');
            $table->string('asin');
            $table->string('walmart_id');
            $table->string('ebay_id');
            $table->float('price_amazon', 8, 2)->unsigned();
            $table->float('price_walmart', 8, 2)->unsigned();
            $table->float('price_ebay', 8, 2)->unsigned();
            $table->float('shipping', 8, 2)->unsigned();
            $table->boolean('walmart_available')->default(true);
            $table->timestamp('renew')->useCurrent = true;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
