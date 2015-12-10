<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('register', function($table){
            $table->string('desc1', 400);
            $table->string('desc2', 400);
            $table->string('desc3', 400);
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
        Schema::table('register', function($table)
        {
            $table->dropColumn(['desc1', 'desc2', 'desc3']);
        });
    }
}
