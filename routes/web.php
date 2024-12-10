<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;


Route::get('/', [DefaultController::class, 'home'])->name('home');
Route::get('/registration', [DefaultController::class, 'registration'])->name('registration');
Route::post('/registration', [DefaultController::class, 'register']);