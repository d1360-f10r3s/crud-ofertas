<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::resource('ofertas', OfertaController::class);

Route::get('/', function () {
    return redirect('/ofertas');
});