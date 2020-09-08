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
            $table->string('ip');
            $table->string('browser');
            $table->string('device');
            $table->string('os');
            $table->string('service_status');
            
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
