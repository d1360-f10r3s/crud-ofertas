<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ofertas', OfertaController::class);