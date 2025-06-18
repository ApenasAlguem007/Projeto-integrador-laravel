<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProfileController;
use App\Models\Cadastro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// rota Post

Route::post('/cadastro', [CadastroController::class,'adicionar'])->name('cadastro.adicionar.post');


// Rota Get
Route::get('/cadastro', [CadastroController::class,'adicionar'])->name('cadastro.adicionar.get');


Route::get('/cadastro', function (){
    return view('cadastro');
});

Route::get('/index', function (){
    return view('index');
});

Route::get('/signin', function (){
    return view('signin');
});


Route::get('/courses', function(){
return view('courses');
});

Route::get('/details', function(){
    return view('details');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/register', function (){
    return view('register');
});

require __DIR__.'/auth.php';
