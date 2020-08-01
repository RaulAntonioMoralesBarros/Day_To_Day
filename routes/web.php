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

Route::get('/Ingreso', function () {
    return view('web_site.access.login');
});

Route::get('/Registro', function () {
    return view('web_site.access.register');
});

Route::get('/Restablecer_contraseña', function () {
    return view('web_site.access.forgot-password');
});

Route::get('/Diario_de_vida', function () {
    return view('app.diaries.personal_diary.personal_diary');
});

Route::get('/Paginas_del_diario_personal', function () {
    return view('app.diaries.pages_personal.personal_diary_pages');
});

Route::get('/Nueva_pagina', function () {
    return view('app.diaries.new_pages.new_pages');
});

Route::get('/Mostrar_pagina', function () {
    return view('app.diaries.show_pages.view_pages');
});

Route::get('/Listas_y_prioridades', function () {
    return view('app.lists_and_priorities.lists.lists_and_priorities');
});

Route::get('/Tareas', function () {
    return view('app.lists_and_priorities.tasks.tasks');
});

Route::get('/Historial_listas', function () {
    return view('app.lists_and_priorities.tasks.history');
});

Route::get('/Objetivos_y_metas', function () {
    return view('app.objectives_and_goals.objectives_and_goals.goals');
});

Route::get('/Completadas_metas', function () {
    return view('app.objectives_and_goals.objectives_and_goals.completed');
});

Route::get('/Metas', function () {
    return view('app.objectives_and_goals.objectives.objectives');
});

Route::get('/Historial_objetivos', function () {
    return view('app.objectives_and_goals.objectives.history');
});

Route::get('/Tu_peso_ideal', function () {
    return view('app.ideal_weight.ideal_weight');
});

Route::get('/Enlaces_secretos', function () {
    return view('app.secret_links.secret_links');
});

Route::get('/Agenda_telefonica', function () {
    return view('app.phonebook.phonebook');
});

Route::get('/Frases_motivadoras', function () {
    return view('app.motivational_phrases.motivational_phrases');
});

Route::get('/Estadisticas', function () {
    return view('app.statistics.statistics');
});

Route::get('/Galeria', function () {
    return view('app.photos.gallery');
});

Route::get('/Invitar', function () {
    return view('app.invite.invite_premium');
});

Route::get('/Configuracion', function () {
    return view('app.configurations.configurations');
});

Route::get('/Perfil', function () {
    return view('app.configurations.account');
});

Route::get('/Cambiar_contraseña', function () {
    return view('app.configurations.change_password');
});

Route::get('/Politicas_de_cookie', function () {
    return view('app.information.cookie_policies');
});

