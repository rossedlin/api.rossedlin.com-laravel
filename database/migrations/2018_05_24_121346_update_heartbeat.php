<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHeartbeat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('heartbeat_pulse', function (Blueprint $table) {

            $table->text('data')->after('ip_address')->nullable();
            $table->integer('data_type')->after('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('heartbeat_pulse', function (Blueprint $table) {
            $table->dropColumn('data');
            $table->dropColumn('data_type');
        });
    }
}
