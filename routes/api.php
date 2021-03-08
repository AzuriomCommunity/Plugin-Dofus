<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Azuriom\Plugin\Dofus\Controllers\Api\BakController;
use Azuriom\Plugin\Dofus\Controllers\Api\MainController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your plugin. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/json/Dofus/v3/Bak')->group(function () {
    Route::prefix('/Bid')->group(function(){
        Route::get('/GetOffersOgrines', [BakController::class, 'getOgrineOffers']);
        Route::get('/GetOffersKamas', [BakController::class, 'getKamasOffers']);
        Route::get('/GetAccountBids', [BakController::class, 'getAccountOffers']);
    });
    Route::get('/Rate/GetDirectionsRates', [BakController::class, 'getRates']);
});

