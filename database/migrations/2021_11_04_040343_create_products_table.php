<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id");
            $table->foreignId("store_id");
            $table->foreignId("category_id");
            $table->string("name");
            $table->integer("weight");
            $table->double("price");
            $table->double("sale_price");
            $table->string("sku")->nullable();
            $table->string("image_path")->nullable();
            $table->integer("qty");
            $table->string("status");
            $table->string("desc");
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
        Schema::dropIfExists('products');
    }
}
