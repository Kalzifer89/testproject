@extends('layout')

@section('head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
@endsection

@section('content')

  <div id="wrapper">
    <div class="container" id="page">
      <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

      <form class="" action="/laravel/testproject/public/articles/{{ $article->id}}" method="post">
        @csrf
        @method('PUT')

      <div class="field">

        <label class="label" for="title">Title</label>

        <div class="control">
          <input class="input" id="title" type="text" name="title" value="{{$article->title}}">
        </div>

      </div>

      <div class="field">

        <label class="label" for="excerpt">Excerpt</label>

        <div class="control">
          <textarea class="textarea" id="excerpt" type="textarea" name="excerpt">{{$article->excerpt}}</textarea>
        </div>

      </div>

      <div class="field">

        <label class="label" for="body">Body</label>

        <div class="control">
          <textarea class="textarea" id="body" type="textarea" name="body" value="">{{$article->body}}</textarea>
        </div>

      </div>

      <div class="field is-grouped">

        <div class="control">
          <button class="button is-link" type="submit">Submit</button>
        </div>
      </div>


      </form>

    </div>
  </div>

@endsection
