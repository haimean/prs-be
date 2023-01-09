<?php

use App\Http\Controllers\Api\AuthController as ControllersAuthController;
use Illuminate\Support\Facades\Route;

Route::controller(ControllersAuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});
