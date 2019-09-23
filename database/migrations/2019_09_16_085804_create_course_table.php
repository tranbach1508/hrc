<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cate_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('email');
            $table->string('hotline');
            $table->Integer('tuition');
            $table->Integer('endow');
            $table->text('intro');
            $table->text('content');
            $table->text('schedule');
            $table->string('teacher');
            $table->string('address');
            $table->tinyInteger('status');
            $table->tinyInteger('level');
            $table->foreign('cate_id')
            ->references('id')
            ->on('cate_course')
            ->onDelete('cascade');
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
        Schema::dropIfExists('course');
    }
}
