<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string ('name');
            $table->string ('nric');
            $table->string ('address');
            $table->string ('mobile_no');
            $table->string ('email');
            $table->date ('birthday');
            $table->string ('epf')->nullable();
            $table->string ('gender');
            $table->string ('martial_status');
            $table->string ('spouse_occupation')->nullable();
            $table->integer ('kids_no')->nullable()->unsigned();
            $table->string ('birth_country');
            $table->string ('citizenship');
            $table->string ('religion');
            $table->string ('race');
            $table->boolean ('interview')->default(false);
            $table->integer ('position_id')->unsigned()->nullable();
            $table->integer ('education_id')->unsigned()->nullable();
            $table->integer ('employment_id')->unsigned()->nullable();
            $table->integer ('declaration_id')->unsigned()->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
