<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->uuid('uuid')->primary();

            $table->uuid('game_uuid');
            $table->foreign('game_uuid')
                    ->references('uuid')
                    ->on('games');

            $table->string('category');
            $table->unsignedInteger('time');

            $table->string('vod_url');
            $table->unsignedInteger('vod_length');

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
        Schema::dropIfExists('runs');
    }
}
