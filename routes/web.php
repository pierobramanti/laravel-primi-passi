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

// Rotta per la pagina Home
Route::get('/', function () {
    $msg = "Hello World!";
    return view('home', compact('msg')); 
})->name('home');

// Rotta per la pagina Chi siamo
Route::get('/chi-siamo', function () {
    $msg = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe delectus, voluptas reiciendis facere dicta et necessitatibus officia voluptates corporis minima quos asperiores, quasi inventore ad aperiam tempore corrupti dolorem quae?";
    return view('about-us', compact('msg')); 
})->name('about-us');

// Rotta per la pagina Contattaci
Route::get('/contattaci', function () {
    $msg = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe delectus, voluptas reiciendis facere dicta et necessitatibus officia voluptates corporis minima quos asperiores, quasi inventore ad aperiam tempore corrupti dolorem quae?";
    return view('contact-us', compact('msg'));  
})->name('contact-us');

// Rotta per la pagina I nostri social
Route::get('/i-nostri-social', function () {
    $msg = "I nostri social";
    return view('social', compact('msg'));   
})->name('social');
