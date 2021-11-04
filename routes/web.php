<?php

use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\Application\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/user/profile', ProfileController::class)->name('user.profile')->middleware('password.confirm');
});
