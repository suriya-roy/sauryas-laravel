<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/company', function () {
    return view('company.index');
});

Route::get('/company/create', function () {
    return view('company.create');
});

Route::post('/save-company', function (Request $request) {
    return $request;



});

