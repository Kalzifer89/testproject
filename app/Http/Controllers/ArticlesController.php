<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
  //Übernimmt die ID aus der URL und gibt den Articles show View aus
  public function show($id)
  {
    $article = Article::findOrFail($id);

    return view('articles.show',['article' => $article]);
  }

  //Listet alle Einträge und gibt den showall View aus
  public function index()
  {
    $articles = Article::latest()->get();

    return view('articles.index', [
      'articles' => $articles
    ]);
  }

  //create Funktion
  public function create()
  {
    return view('articles.create');
  }

  //Store Funktion

  public function store()
  {

    request()->validate([
      'title' => 'required',
      'excerpt' => 'required',
      'body' => 'required'
    ]);

    $article = new Article();

    $article->title = request('title');
    $article->excerpt = request('excerpt');
    $article->body = request('body');

    $article->save();

    return redirect('/articles');

  }

  public function edit($id)
  {
    $article = Article::find($id);
    return view('articles.edit', compact('article'));
  }

  public function update($id)
  {

    request()->validate([
      'title' => 'required',
      'excerpt' => 'required',
      'body' => 'required'
    ]);

    $article = Article::find($id);

    $article->title = request('title');
    $article->excerpt = request('excerpt');
    $article->body = request('body');

    $article->save();

    return redirect('/articles/' . $article->id);
  }
}
