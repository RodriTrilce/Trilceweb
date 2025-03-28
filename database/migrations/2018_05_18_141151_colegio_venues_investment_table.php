<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColegioVenuesInvestmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('colegio_venue_investment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idvenue')->unsigned()->nullable();
            $table->string('range');
            $table->text('admissionfee')->nullable();
            $table->text('enrollment');
            $table->text('monthlypayment');
            $table->timestamps();
        });
        
        Schema::table('colegio_venue_investment', function(Blueprint $table)
        {
          $table->foreign('idvenue')->references('id')->on('colegio_venue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegio_venue_investment');
    }
}
