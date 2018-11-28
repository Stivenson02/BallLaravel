<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataFootbalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_footbals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Team', 45)->nullable();
            $table->integer('P')->nullable();
            $table->integer('W')->nullable();
            $table->integer('L')->nullable();
            $table->integer('D')->nullable();
            $table->integer('F')->nullable();
            $table->integer('A')->nullable();
            $table->integer('Pts')->nullable();
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
        Schema::dropIfExists('data_footbals');
    }
}
