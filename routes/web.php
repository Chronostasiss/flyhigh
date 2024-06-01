<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/ticket-test', [App\Http\Controllers\HomeController::class, 'tickettest'])->name('tickettest');
Route::get('/purchased', [App\Http\Controllers\HomeController::class, 'purchase_success'])->name('purchase_success');

Route::get('/', function () {
    return view('welcome');
});

TicketController::initializeRoutes();
Auth::routes();
