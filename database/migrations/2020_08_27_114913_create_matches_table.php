<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('week');
            $table->datetime('kick_off');
            $table->bigInteger('stadium_id')->unsigned();
            $table->bigInteger('home_team_id')->unsigned();
            $table->bigInteger('away_team_id')->unsigned();
            $table->integer('home_team_score')->nullable();
            $table->integer('away_team_score')->nullable();
            $table->foreign('stadium_id')->references('id')->on('stadia')->onDelete('restrict');
            $table->foreign('home_team_id')->references('id')->on('teams')->onDelete('restrict');
            $table->foreign('away_team_id')->references('id')->on('teams')->onDelete('restrict');
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
        Schema::dropIfExists('matches');
    }
}
