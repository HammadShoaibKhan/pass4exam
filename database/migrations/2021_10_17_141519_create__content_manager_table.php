<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_manager', function (Blueprint $table) {
            $table->id();
            $table->string('type');     /** page-type enum({ home|vendor|exam| ... })*/
            $table->string('placeholder_name'); /** placeholderName ==> Replaceable */
            $table->longText('Placeholder_value')->nullable(); /** placeholderValue ==> Replacer */
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
        Schema::dropIfExists('content_manager');
    }
}
