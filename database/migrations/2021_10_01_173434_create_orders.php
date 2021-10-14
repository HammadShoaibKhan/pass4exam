<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_email');
            $table->longText('user_detail')->nullable();
            // user_detail {
            //     name
            //     address
            //     country
            //     state
            //     city
            // }
            $table->float('total_bill')->nullable();
            $table->float('total_discount')->nullable();
            $table->longText('order_detail')->nullable();
            // OrderDetail {
            //     bundleType = vendor | exam-web | exam-pdf ...
            //     bundleTitle = vendor | exam-title
            //     orignalprice
            //     discountedprice
            // }
            $table->integer('subscribed_for')->nullable();  //in ( month) {3|6|12}
            $table->tinyInteger('paid')->default(0);    // {0|1}
            $table->boolean('status')->default('1');    // {1|0}
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
        Schema::dropIfExists('orders');
    }
}
