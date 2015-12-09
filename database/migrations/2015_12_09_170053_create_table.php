<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('mobile', 15);
            $table->string('email', 300);
            $table->integer('student');
            $table->string('coll_name', 600);
            $table->string('coll_city', 250);
            $table->string('coll_degree', 50);
            $table->string('coll_dept', 600);
            $table->integer('coll_year');
            $table->string('img1_url', 600);
            $table->string('img2_url', 600);
            $table->string('img3_url', 600);
            $table->integer('selected')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('register');
    }
}
