<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home')->middleware('auth');

Route::get('/register', Register::class)->name('register')->middleware('guest');
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');