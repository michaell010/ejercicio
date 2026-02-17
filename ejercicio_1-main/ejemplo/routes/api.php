<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;

// CRUD completo de salones
Route::apiResource('salones', SalonController::class);
