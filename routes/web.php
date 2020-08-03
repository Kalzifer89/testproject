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

//Route gibt einfach ein View Aus
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = request('name');

    return view('test', [
      'name' => $name
    ]);
});

//Route holt die letzen 3 Artikel aus der Datenbank und gibt diese im View "Articles" aus
Route::get('/about', function () {
    $articles = App\Article::take(3)->latest()->get();

    return view('about' , [
      'articles' => $articles
    ]);
});

//Route überlässt alles dem Posts Controller
Route::get('/posts/{post}', 'PostsController@show');

//Route überlässt alles dem Articles Controller übergibt ihm aber den Wert hinter /articles/
Route::get('articles/', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');
Route::get('articles/{article}', 'ArticlesController@show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
Route::put('articles/{article}', 'ArticlesController@update');
