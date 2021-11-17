<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileLegendsStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_legends_stats', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_legend_id');
            $table->string("best_hero");
            $table->string('most_mvp');
            $table->string('most_kills');
            $table->string("best_farmer");
            $table->string('most_win_hero');
            $table->integer('max_number_of_kills');
            $table->integer('max_number_of_death');
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
        Schema::dropIfExists('mobile_legends_stats');
    }
}
