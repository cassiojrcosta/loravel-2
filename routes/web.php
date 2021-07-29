<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get(
    '/', 
    [HomeController::class, 'index']
);

Route::get(
    '/contato',
    [HomeController::class, 'contato']
);

Route::get(
    '/calculadora/{op}',
    [HomeController::class, 'calculadora']
);

Route::post(
    '/soma',
    [HomeController::class, 'soma']
);

Route::post(
    '/sub',
    [HomeController::class, 'sub']
);

Route::post(
    '/div',
    [HomeController::class, 'div']
);

Route::post(
    '/mult',
    [HomeController::class, 'mult']
);

