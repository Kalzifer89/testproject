@extends('layout')

@section('head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
@endsection

@section('content')

  <div id="wrapper">
    <div class="container" id="page">
      <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

      <form class="" action="/laravel/testproject/public/articles" method="post">
        @csrf
      <div class="field">

        <label class="label" for="title">Title</label>

        <div class="control">
          <input class="input @error('title') is-danger @enderror" id="title" type="text" name="title" value="{{old('title')}}">
          @error('title')
            <p class="help is-danger">{{$errors->first('title')}}</p>
          @enderror
        </div>

      </div>

      <div class="field">

        <label class="label" for="excerpt">Excerpt</label>

        <div class="control">
          <textarea class="textarea @error('excerpt') is-danger @enderror" id="excerpt" type="textarea" name="excerpt">{{old('excerpt')}}</textarea>
          @error('title')
            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
          @enderror
        </div>

      </div>

      <div class="field">

        <label class="label" for="body">Body</label>

        <div class="control">
          <textarea class="textarea @error('body') is-danger @enderror" id="body" type="textarea" name="body"p>{{old('body')}}</textarea>
            @error('body')
              <p class="help is-danger">{{$errors->first('body')}}</p>
            @enderror
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
