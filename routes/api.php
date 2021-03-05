<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\LoginController;
use App\Http\Controllers\ApiController\ProfileController;
use App\Http\Controllers\ApiController\FixtureController;
<<<<<<< HEAD
use App\Http\Controllers\ApiController\MatchesController;
=======
use App\Http\Controllers\ApiController\RoanuzApiController;
>>>>>>> 460e72e7e54d012cd2a6cb1336d7daf77974c059


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/hi', [LoginController::class, 'hi']);

// ---------- Routes by Abhishek ---------------

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/signup', [LoginController::class, 'signup']);
    Route::post('/sendOtp', [LoginController::class, 'sendOtp']);

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', [LoginController::class, 'logout']);
        Route::get('user', [LoginController::class, 'user']);
    });
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::Post('profile-update', [ProfileController::class, 'update']);
});
// Route::get('/roanuzAuth',[RoanuzApiController::class,'roanuzAuth']);
Route::get('/recent_tournaments',[RoanuzApiController::class,'recent_tournaments']);

// -----------------------------------------

// Routes By Aamir
Route::get('/GetFixture',[FixtureController::class,'getFixtureByRange']);
<<<<<<< HEAD
Route::get('/TeamOne',[MatchesController::class,'getTeamone']);
// ENds
=======

// ENds
>>>>>>> 460e72e7e54d012cd2a6cb1336d7daf77974c059
