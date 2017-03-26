<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer ('candidate_id')->unsigned();
            $table->time('int_time');
            $table->date('int_date');
            $table->string('position');
            $table->date('pre_date');
            $table->string ('pre_outlet')->default ('any');
            $table->string('salary');
            $table->string('source');
            $table->string('recommend_name')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
