<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestedProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product_req', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('request_from');
            $table->string('request_to');
            $table->string('product_name');
            $table->string('product_category');
            $table->string('product_manufacturer');
            $table->string('product_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product_req');
    }
}
