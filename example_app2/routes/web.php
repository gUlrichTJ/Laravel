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

    // Ici, nous allons recueillir le nom entré dans le navigateur
    Route::get('/blog2', function (Request $request1) {
        return [
            //"name" => $_GET['name'], // Pour recevoir le nom entré dans le navigateur
            // "name" => $request1 -> path(), // path renvoie le chemin courant
            // "name" => $request1 -> url(), // Renvoie l'url courant
            // "name" => $request1 -> all(), // Donne toutes les informations
                                             // Comme le nom, l'âge, la taille, le sexe
            "name" => $request1 -> input('age'),
            "articles" => "Article 1"
        ];
    });

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
    Route::get('/articles1', function (Request $request) {
        $name = 'God';
        return [
            "name" => $request -> input('name', 'God\'s team'), 
            "articles" => "Article 1"
        ];
    });

    // Découverte d'une nouvelle route pour slug
    /*
    Route::get('/blog/{slug}-{id}', function () {
        return "Bonjour";
    });
    */

    // <pre><code></code></pre> pour écrire du code dans une page web

    // Redirection vers un article particulier
    Route::get('/blog3/{slug}-{id}', function (Request $request) {
        return [
            "link" => \route('blog.show', ['slug' => 'articla', 'id' => 14])    // "/blog/mon-premier-article-12"
        ];
    })-> blog.index;    // Pour donner un nom à la route

    Route::get('/blog/{slug}-{id}', function (string $slug, string $id, Request $request) {
        return [
            "slug" => $slug,
            "id" => $id,
            "name" => $request -> input('name')
        ];
    })-> where([
        'id' => '[0-9]+',
        'slug' => '[A-Za-z0-9\-]+'
    ])-> blog.show;

