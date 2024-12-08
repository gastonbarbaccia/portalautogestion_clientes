<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/verification', function () {
    return view('verificationcode');
});

Route::get('/tipocancelacion', function () {
    return view('tipocancelacion');
});

Route::get('/fechapago', function () {
    return view('fechapago');
});

Route::get('/formapago', function () {
    return view('formapago');
});

Route::get('/contrato', function () {
    return view('contrato');
});