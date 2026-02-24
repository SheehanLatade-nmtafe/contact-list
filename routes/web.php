<?php

use app\Http\Controllers\StaticPages\ContactUsController as ContactUsControllerAlias;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', [\App\Http\Controllers\StaticPages\ContactUsController::class, 'index'])
    ->name('static.contact-us');

Route::get('thank-you', [\App\Http\Controllers\StaticPages\ContactUsController::class, 'thankYou'])
    ->name('static.thank-you');

