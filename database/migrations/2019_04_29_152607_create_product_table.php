<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('company_name',100);
            $table->string('product_name',100);
            $table->string('category_name',100);
            $table->string('manufacture_name',100);
            $table->text('product_description',1000);
            $table->integer('product_price',100);
            $table->integer('quantity',10);
            $table->varchar('product_image',100);
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
        Schema::dropIfExists('tbl_products');
    }
}
