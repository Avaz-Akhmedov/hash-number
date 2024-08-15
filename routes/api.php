<?php

use App\Http\Controllers\HashToNumberController;
use Illuminate\Support\Facades\Route;

Route::post('/convert', HashToNumberController::class);

