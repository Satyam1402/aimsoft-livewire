<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/whyus', function () {
    return view('whyus');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/website_development', function () {
    return view('website_development');
});
Route::get('/web_application_development', function () {
    return view('web_application_development');
});
Route::get('/web_marketting', function () {
    return view('web_marketting');
});
Route::get('/android_app_development', function () {
    return view('android_app_development');
});
Route::get('/iphone_app_development', function () {
    return view('iphone_app_development');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('Contact');
});