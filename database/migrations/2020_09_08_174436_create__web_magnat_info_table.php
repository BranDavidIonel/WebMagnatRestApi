<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebMagnatInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_magnat_info', function (Blueprint $table) {
            $table->id('id');
            /*
            //
            //I want to obtain other data from the operators in the future
            $table->string('ip');
            $table->string('browser');
            $table->string('device');
            $table->string('os');
            */
            //now only service_status (ex: good,fair)
            $table->string('service_status');
            //now it is null 
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
        Schema::dropIfExists('web_magnat_info');
    }
}
