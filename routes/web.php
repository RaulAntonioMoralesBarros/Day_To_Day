<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Diario_de_vida', function () {
    return view('diaries.personal_diary.personal_diary');
});

Route::get('/Paginas_del_diario_personal', function () {
    return view('diaries.pages_personal.personal_diary_pages');
});

Route::get('/Nueva_pagina', function () {
    return view('diaries.new_pages.new_pages');
});

Route::get('/Mostrar_pagina', function () {
    return view('diaries.show_pages.view_pages');
});

Route::get('/Listas_y_prioridades', function () {
    return view('lists_and_priorities.lists_and_priorities');
});

