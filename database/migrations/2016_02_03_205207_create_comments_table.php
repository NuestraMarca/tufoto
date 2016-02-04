<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comments', function ($table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title')->nullable();
            $table->text('body');

            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();

            $table->morphs('commentable');
            $table->integer('client_id')->unsigned();

            $table->index('client_id');
            $table->index('commentable_id');
            $table->index('commentable_type');

            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
