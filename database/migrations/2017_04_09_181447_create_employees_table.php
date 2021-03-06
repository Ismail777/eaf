<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    
    
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->integer('candidate_id')->unsigned();
            $table->integer('staff_number')->unsigned();
            $table->string('name');
            $table->string('position');
            $table->string('salary');
            $table->string('outlet');
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
        Schema::dropIfExists('employees');
    }
}
