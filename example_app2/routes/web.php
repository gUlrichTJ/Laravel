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
        // var_dump($request);   // var_dump() est une fonction en PHP qui affiche des informations structurées sur une variable, y compris son type de données, sa longueur et son contenu. Elle est utile pour déboguer des scripts PHP et pour comprendre comment une variable est structurée.
        // Par exemple, si vous voulez savoir ce qui est stocké dans une variable $myVar, vous pouvez utiliser var_dump($myVar); pour afficher des informations sur cette variable. Cela peut vous aider à comprendre pourquoi votre script ne fonctionne pas comme prévu.

        // dd($request);    // La fonction dd() en PHP signifie "Dump and Die", ce qui signifie qu'elle affiche le contenu d'une variable et arrête l'exécution du script. Lorsque vous passez $request en tant que paramètre à la fonction dd(), elle affichera toutes les informations sur la demande HTTP entrante, y compris les en-têtes, les cookies, les paramètres de la requête, les données de formulaire, etc. Cela peut être utile pour déboguer les problèmes de requête dans une application web Laravel.
        // Nous créons une variable name
        $name = isset($_GET['name']) ? $_GET['name'] : "";
        return [
            "name" => $request -> all(),
            "articles" => "Article 1"
        ];
    });

    // Autre route pour article1
    Route::get('/articles1', function () {
        $name = 'God';
        return [
            "name" -> input('name'), 
            "articles" => "Article 1"
        ];
    })
