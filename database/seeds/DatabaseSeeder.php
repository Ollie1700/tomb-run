<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * TODO: REMOVE ALL MANUAL UUID ASSIGNMENTS
     *
     * @return void
     */
    public function run()
    {
        // GAMES
        DB::table('games')->insert([
            [
                'uuid' => 'tr2-uuid',
                'name' => 'Tomb Raider II',
            ],
        ]);

        // RUNS
        DB::table('runs')->insert([
            [
                //
                'uuid' => 'footi-any-wr-uuid',
                'game_uuid' => 'tr2-uuid',
                'category' => 'Any%',
                'time' => 2954, // 49m 14s
                'vod_url' => 'https://www.youtube.com/watch?v=dU5d7SOrmXc',
                'vod_length' => 3049, // 50m 49s
            ]
        ]);

        // STRATEGIES
        DB::table('strategies')->insert([
            [
                'uuid' => 'qwop-strat-uuid',
                'name' => 'QWOP',
                'wiki' => 'The "QWOP" is a strange glitch that embeds Lara into the floor. After a small amount of time, Lara will clip into the floor and is able to move several tiles forwards (even through walls).',
            ]
        ]);

        // RTAs
        DB::table('rtas')->insert([
            [
                'uuid' => 'rta-qwop-uuid',
                'strategy_uuid' => 'qwop-strat-uuid',
                'run_uuid' => 'footi-any-wr-uuid',
                'timestamp' => 10,
            ]
        ]);
    }
}
