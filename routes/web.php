<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PaymentController;

Route::get('/{any}', function () {
    return view('layouts.app'); // your frontend Vue entry file
})->where('any', '^(?!api).*$'); 


Route::prefix('api')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);
    });

    Route::get('/user-details/{identifier}', [UserController::class, 'show']);

    Route::get('/users', [UserController::class, 'index']);

    Route::get('/contact-messages', [ContactMessageController::class, 'index']);

    Route::get('/payments', [PaymentController::class, 'index']);

    Route::get('/subscriptions', [PaymentController::class, 'subscriptions']);
});