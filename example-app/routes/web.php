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
    return view('welcome');
});

// Mettre une autre route pour blog
Route::get('/blog', function () {
    return 'welcome';
});

// Mettre une route pour TJ
Route::get('/TJ', function () {
    return "Hello how are you ?";
})
?>
