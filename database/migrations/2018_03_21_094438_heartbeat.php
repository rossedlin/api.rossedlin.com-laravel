<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Heartbeat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heartbeat_entity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 20);
            $table->unique('code');
            $table->timestampsTz();
        });

        Schema::create('heartbeat_pulse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('heartbeat_entity_id');
            $table->ipAddress('ip_address');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heartbeat_entity');
        Schema::dropIfExists('heartbeat_pulse');
    }
}
