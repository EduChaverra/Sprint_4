<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\GimnastaController;
use App\Http\Controllers\CompeticionController;


Route::get('/', function () {
    return view('index');
});

Route::resource('clubs', ClubController::class);
Route::resource('gimnastas', GimnastaController::class);
Route::resource('competiciones', CompeticionController::class);


