@extends('layout')


@section('content')

  <div id="wrapper">
  	<div id="page" class="container">
  		<div id="content">
  			<div class="title">
  				<h2>{{$article->title}}</h2>
  				<span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
  			<p><img src="/laravel/testproject/public/images/banner.jpg" alt="" class="image image-full" /> </p>

          {{$article->body}}

  		</div>
  	</div>
  </div>

@endsection
