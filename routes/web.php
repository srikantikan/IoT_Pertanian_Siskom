<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertanianController;

Route::get('/', [PertanianController::class, 'dashboard']);
