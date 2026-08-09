<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameAccountController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\FraudReportController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',
        [DashboardController::class,'index']
    )->name('dashboard');

    Route::resource(
        'accounts',
        GameAccountController::class
    );

    Route::resource(
        'sponsors',
        SponsorController::class
    );

    Route::resource(
        'reports',
        FraudReportController::class
    );

    Route::get(
        '/settings',
        [SettingController::class,'index']
    )->name('settings');

});
