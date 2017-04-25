<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edocuments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('employee_id')->unsigned();
            $table->string ('grandparents');
            $table->string ('parents_siblings');
            $table->string ('employee_image')->nullable();
            $table->string ('typhoid')->nullable();
            $table->string ('bank_info')->nullable();
            $table->string ('bank_statment')->nullable();
            $table->string ('nric')->nullable();
            $table->string ('education_cert')->nullable();
            $table->string ('employment_slip')->nullable();
            $table->string ('hygenic_cert')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edocuments');
    }
}
