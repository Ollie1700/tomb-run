<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rtas', function (Blueprint $table) {
            $table->uuid('uuid')->primary();

            $table->uuid('run_uuid');
            $table->foreign('run_uuid')
                    ->references('uuid')
                    ->on('runs');

            $table->uuid('strategy_uuid');
            $table->foreign('strategy_uuid')
                    ->references('uuid')
                    ->on('strategies');

            $table->unsignedInteger('timestamp');

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
        Schema::dropIfExists('rtas');
    }
}
