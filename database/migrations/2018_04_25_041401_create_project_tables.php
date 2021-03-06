<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id' , true);
            $table->string('p_name' , 100);
            $table->string('p_client' , 50);
            $table->double('price', 10, 2);
            $table->tinyInteger('developer');
            $table->tinyInteger('meet_time');
            $table->tinyInteger('mode');
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
        //
    }
}
