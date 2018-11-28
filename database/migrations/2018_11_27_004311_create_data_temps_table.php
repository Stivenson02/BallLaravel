<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Dy', 45)->nullable();
            $table->string('Mxt', 45)->nullable();
            $table->string('Mnt', 45)->nullable();
            $table->string('Avt', 45)->nullable();
            $table->string('HDDay', 45)->nullable();
            $table->string('AvDP', 45)->nullable();
            $table->string('1HrP', 45)->nullable();
            $table->string('TPcpn', 45)->nullable();
            $table->string('WxType', 45)->nullable();
            $table->string('PDir', 45)->nullable();
            $table->string('AvSp', 45)->nullable();
            $table->string('Dir', 45)->nullable();
            $table->string('MxS', 45)->nullable();
            $table->string('SkyC', 45)->nullable();
            $table->string('MxR', 45)->nullable();
            $table->string('MnR', 45)->nullable();
            $table->string('AvSLP', 45)->nullable();
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
        Schema::dropIfExists('data_temps');
    }
}
