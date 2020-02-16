<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/v1')->group(function () {

    // GAMES
    Route::get('/games', function () {
        return App\Models\Game::all();
    });

    // RUNS
    Route::get('/runs', function () {
        return App\Models\Run::all();
    });

    // STRATEGIES
    Route::get('/strategies', function () {
        return App\Models\Strategy::all();
    });

    // RTAs
    Route::get('/rtas', function () {
        return App\Models\RTA::all();
    });

});
