<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); //response a view
    // return env('MY_NAME');
});

// dinh nghia Route/Endpoint
Route::get('/users', function () {
    return 'This is the users page.'; //response a string
});

//response an array
Route::get('/foods', function () {
    return ['poo', 'phoong', 'ben'];
});
