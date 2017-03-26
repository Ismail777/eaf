<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('candidate_id')->nullable()->unsigned();
            $table->string ('company')->nullable();
            $table->string ('job_title')->nullable();
            $table->string ('ex_salary')->nullable();
            $table->date ('start_date')->nullable();
            $table->date ('end_date')->nullable();
            $table->string ('leave_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employments');
    }
}
