<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Website
Route::view('about', 'pages.about-us')->name('about');
Route::view('contact', 'pages.contact-us')->name('contact');
Route::view('events', 'pages.events')->name('events');
Route::view('event-single', 'pages.event-single')->name('event-single');

// Dashboard
Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);

Route::middleware('auth')->prefix('dashboard')->group(function ()
{
    Route::resource('events', EventController::class);

    Route::get('user/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::resource('users', UserController::class);

    Route::resource('about', AboutController::class);

    Route::resource('sponsors', SponsorController::class);
});

