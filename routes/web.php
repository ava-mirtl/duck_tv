<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main_page');

Route::post('/application', [ApplicationController::class, 'store'])->name('application');
