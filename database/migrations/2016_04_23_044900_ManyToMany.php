<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ManyToMany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table){

            $table->integer('category_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->primary(['category_id','product_id']);
        });

        Schema::create('image_product', function (Blueprint $table){

            $table->integer('image_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->primary(['image_id','product_id']);
        });

        Schema::create('manufacture_product', function (Blueprint $table){

            $table->integer('manufacture_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('manufacture_id')
                ->references('id')
                ->on('manufactures')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->primary(['manufacture_id','product_id']);
        });

        Schema::create('products_products', function (Blueprint $table){

            $table->integer('product_id')->unsigned();
            $table->integer('product_id1')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->foreign('product_id1')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->primary(['product_id','product_id1']);
        });

        Schema::create('attribute_product', function (Blueprint $table){

            $table->integer('attribute_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('attribute_id')
                ->references('id')
                ->on('attributes')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->primary(['attribute_id','product_id']);
        });

        Schema::create('discount_product', function (Blueprint $table){

            $table->integer('discount_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('discount_id')
                ->references('id')
                ->on('discounts')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->primary(['discount_id','product_id']);
        });

        Schema::create('product_tag', function (Blueprint $table){

            $table->integer('product_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade');
            $table->primary(['product_id','tag_id']);
        });

        Schema::create('attr_group_attribute', function (Blueprint $table){

            $table->integer('attribute_id')->unsigned();
            $table->integer('attr_group_id')->unsigned();
            $table->foreign('attribute_id')
                ->references('id')
                ->on('attributes')
                ->onDelete('cascade');
            $table->foreign('attr_group_id')
                ->references('id')
                ->on('attr_groups')
                ->onDelete('cascade');
            $table->primary(['attribute_id','attr_group_id']);
        });

        Schema::create('customer_group_discount', function (Blueprint $table){

            $table->integer('customer_group_id')->unsigned();
            $table->integer('discount_id')->unsigned();
            $table->foreign('customer_group_id')
                ->references('id')
                ->on('customer_groups')
                ->onDelete('cascade');
            $table->foreign('discount_id')
                ->references('id')
                ->on('discounts')
                ->onDelete('cascade');
            $table->primary(['customer_group_id','discount_id']);
        });

        Schema::create('product_review', function (Blueprint $table){

            $table->integer('product_id')->unsigned();
            $table->integer('review_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->foreign('review_id')
                ->references('id')
                ->on('reviews')
                ->onDelete('cascade');
            $table->primary(['product_id','review_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
