<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('areas', [AreaController::class, 'index'])
    ->name('api.v1.areas.index');

Route::post('areas', [AreaController::class, 'store'])
    ->name('api.v1.areas.store');

Route::get('areas/{area}', [AreaController::class, 'show'])
    ->name('api.v1.areas.show');

Route::put('areas/{area}', [AreaController::class, 'update'])
    ->name('api.v1.areas.update');

Route::delete('areas/{area}', [AreaController::class, 'destroy'])
    ->name('api.v1.areas.destroy');