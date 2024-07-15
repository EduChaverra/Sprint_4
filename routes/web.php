<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\GimnastaController;
use App\Http\Controllers\CompeticionController;
use App\Http\Controllers\ParticipacionController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('index');
});

Route::resource('clubs', ClubController::class);
Route::resource('gimnastas', GimnastaController::class);
Route::resource('competiciones', CompeticionController::class);
Route::resource('participaciones', ParticipacionController::class);
Route::get('reportes/competencias_por_fecha', [ReporteController::class, 'competenciasPorFecha'])->name('reportes.competencias_por_fecha');


