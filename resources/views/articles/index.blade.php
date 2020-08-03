@extends('layout')


@section('content')
  @foreach ($articles as $article )

    <div id="wrapper">
    	<div id="page" class="container">
    		<div id="content">
    			<div class="title">
    				<h2><a href="/laravel/testproject/public/articles/{{$article->id}}">{{$article->title}}</a></h2>
    				<span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
    			<p><img src="/laravel/testproject/public/images/banner.jpg" alt="" class="image image-full" /> </p>

            {{$article->body}}

    		</div>
    	</div>
    </div>

  @endforeach
@endsection
