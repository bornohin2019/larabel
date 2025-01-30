<?php

use Illuminate\Support\Facades\Route;
use App/Http/Controller/PosController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/home',[PosControllers :: class, 'show']);