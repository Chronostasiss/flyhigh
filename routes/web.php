<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/ticket-test', [App\Http\Controllers\HomeController::class, 'tickettest'])->name('tickettest');
Route::get('/purchased', [App\Http\Controllers\HomeController::class, 'purchase_success'])->name('purchase_success');
Route::get('/bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('/bookings/{id}', [App\Http\Controllers\HomeController::class, 'booking_details'])->name('booking_details');
Route::get('/book', [App\Http\Controllers\HomeController::class, 'book'])->name('book');
Route::get('/reschedule/{id}', [App\Http\Controllers\HomeController::class, 'reschedule'])->name('reschedule');

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/home', function () {
    return redirect()->route('home');
});

BookingController::initializeRoutes();
Auth::routes();
