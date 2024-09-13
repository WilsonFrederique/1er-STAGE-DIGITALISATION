<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.accueil.index');
})->name('app_accueil');

Route::get('/conge', function () {
    return view('admin.conge.index');
})->name('app_conge');

Route::get('/employe', function () {
    return view('admin.employe.index');
})->name('app_employe');

Route::get('/formEmploye', function () {
    return view('admin.employe.form');
})->name('app_form_employe');

Route::get('/genererqr', function () {
    return view('admin.genererqr.index');
})->name('app_genererqr');

Route::get('/formCodeQR', function () {
    return view('admin.genererqr.form');
})->name('app_form_CodeQR');

Route::get('/pointage', function () {
    return view('admin.pointage.index');
})->name('app_pointage');

Route::get('/permission', function () {
    return view('admin.permission.index');
})->name('app_permission');

Route::get('/badje', function () {
    return view('admin.badje.index');
})->name('app_badje');
