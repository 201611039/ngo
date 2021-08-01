<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Dashboard\AboutUsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);

Route::middleware('auth')->prefix('dashboard')->group(function ()
{
    Route::get('user/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::resource('users', UserController::class);
    Route::resource('events', EventController::class);

    Route::resource('about', AboutController::class);
    Route::resource('sponsors', SponsorController::class);
});

Route::view('about-us', 'pages.about-us')->name('about');
Route::view('contact-us', 'pages.contact-us')->name('contact');
Route::view('events', 'pages.events')->name('events');
Route::view('event-single', 'pages.event-single')->name('event-single');
