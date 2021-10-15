<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('subject')->nullable();
            $table->longText('message')->nullable();
            $table->enum('type', ['home', 'vendor','certificate','exam'])->nullable()->default('home'); // incase if Sorting needed
            $table->boolean('approved')->default(0);    // {0|1}
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
        Schema::dropIfExists('testimonials');
    }
}
