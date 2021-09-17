<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('attempt_id')->nullable(); /** store current exam attempt id*/
            $table->string('type')->nullable();
            $table->integer('exam_id')->nullable();
            $table->string('case_studies_ids')->nullable();
            $table->integer('passing_range')->nullable();
            $table->integer('question_range')->nullable();
            $table->string('selected_questions_with_answers')->nullable(); /** when exam start we store random selected question ids and there answers in this column*/
            $table->string('user_selected_answers_with_questions')->nullable(); /** when user select any answer and move to next question then we store that attempted question id and user selected answer in this column*/
            $table->string('user_ip')->nullable(); /** if user is not logged in or guest user*/
            $table->integer('user_id')->nullable(); /** if user is logged in*/
            $table->boolean('is_timer_on')->default('0');
            $table->string('duration')->nullable(); /** store exam time duration*/
            $table->double('score')->nullable(); /** score save in percentage*/
            $table->text('answers_status')->nullable(); /** store answer statuses like no of wrong, correct, missed, attempt questions*/
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
        Schema::dropIfExists('assessments');
    }
}
