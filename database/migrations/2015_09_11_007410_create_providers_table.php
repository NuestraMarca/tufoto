<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->string('folder');
            $table->string('url');
            $table->string('cover')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->string('links')->nullable();

            $table->timestamps();

            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('provider_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('providers');
    }
}
