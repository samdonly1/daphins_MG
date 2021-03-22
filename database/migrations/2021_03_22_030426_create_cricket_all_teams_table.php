<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCricketAllTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket_all_teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_id')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('image_path')->nullable();
            $table->string('country_id')->nullable();
            $table->string('national_team')->nullable();
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
        Schema::dropIfExists('cricket_all_teams');
    }
}