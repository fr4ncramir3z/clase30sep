<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlBibliotecaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('biblioteca', ControlBibliotecaController::class);
