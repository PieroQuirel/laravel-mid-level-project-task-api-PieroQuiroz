<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/project', [ProjectController::class, 'index']);

Route::post('/project', [ProjectController::class, 'store']);

Route::put('/project', function () {
    return 'actualizar project';
});

Route::delete('/project', function () {
    return 'eliminar project';
});

Route::get('/task', function () {
    return 'datos task';
});

Route::post('/task', function () {
    return 'crear task';
});

Route::put('/task', function () {
    return 'actualizar task';
});

Route::delete('/task', function () {
    return 'eliminar task';
});
