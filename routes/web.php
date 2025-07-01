<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\password;

Route::get('/', function () {
    return view('home', ['page' => 'home']);
})->name('home');


Route::get('/about', function () {
    return view('about', ['page' => 'about']);
})->name('about');


Route::get('/courses', function () {
    return view('courses', ['page' => 'courses']);
})->name('courses');


Route::get('/reset-password', function(){
    return view('reset-password', ['page' => 'reset-password']);
})->name('reset-password');


Route::get('/register', [CadastroController::class, 'show'])->name('register');


Route::post('/register/store', [CadastroController::class, 'store'])->name('register.store');


Route::get('/login', function () {
    return view('login', ['page' => 'login']);
})->name('login');
