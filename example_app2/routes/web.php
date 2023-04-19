<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    Route::get('/blog',function () {
        return view('name',
        [
            'number'=>2
        ]
    );
    }
);
    // Une autre route pour les articles
    Route::get('/articles', function (Request $request) {
        // Nous créons une variable name
        $name = isset($_GET['name']) ? $_GET['name'] : "";
        return [
            "name" => $request ->path(),
            "articles" => "Article 1"
        ];
    });
