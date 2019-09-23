<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('summary');
            $table->text('content');
            $table->string('image');
            $table->string('slug');
            $table->tinyInteger('status');
            $table->bigInteger('cate_new')->unsigned();
            $table->foreign('cate_new')
            ->references('id')
            ->on('cate_new')
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
        Schema::dropIfExists('new');
    }
}
