<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsmonkMatchListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportsmonk_match_lists', function (Blueprint $table) {
            $table->id();


            $table->string('match_home_team')->nullable();
            $table->string('match_away_team')->nullable();

            $table->string('match_name')->nullable();
            $table->string('match_short_name')->nullable();
            $table->string('match_start_date')->nullable();

            $table->string('fixture_id')->nullable();
            $table->string('league_id')->nullable();
            $table->string('season_id')->nullable();
            $table->string('round_id')->nullable();
            $table->string('group_id')->nullable();
           

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
        Schema::dropIfExists('sportsmonk_match_lists');
    }
}