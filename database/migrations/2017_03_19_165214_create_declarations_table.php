<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer ('candidate_id')->unsigned();

            $table->string('employed_by_fresco');
            $table->string('relatives_in_fresco');
            $table->string('relative_name')->nullable();
            $table->string('food_cert');
            $table->string('food_cert_date')->nullable();
            $table->string('typhoid');
            $table->string('typhoid_date')->nullable();
            $table->string('phy_disability');
            $table->string('phy_disability_type')->nullable();
            $table->string('illness');
            $table->string('illness_type')->nullable();
            $table->string('jaya_grocer');
            $table->string('fresco');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declarations');
    }
}
