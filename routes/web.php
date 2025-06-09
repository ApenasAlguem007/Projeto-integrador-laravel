<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function (){
    return 'Essa é a pagina sobre nós';
});

Route::get ('/home', function (){
    return 'Essa é a página de home';
});

Route::get ('/cadastro', function (){
    return 'Essa é a página de cadastro';
});

Route::get ('/login', function () {
    return 'Essa é a página de login';
});

Route::get ('/recuperacao', function (){
    return 'Essa é a página de recuperação de senha';
});

Route::get ('/curso', function (){
    return 'Essa é a página de curso';
});

Route::get ('/detalhes', function (){
    return 'Essa é a página de detalhes do curso';
});

Route::get ('/meuscursos', function (){
    return 'Essa é a página dos meus cursos';
});

Route::get ('/perfil', function (){
    return 'Essa é a página de perfil';
});

Route::get ('/licoes', function (){
    return 'Essa é a página de lições';
});

