<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::redirect('/', '/clientes');

Route::resource('clientes', ClienteController::class);