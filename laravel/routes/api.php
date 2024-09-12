<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/teste', function () {
    return "teste";
});

Route::get('/events', [EventController::class, 'index']);
