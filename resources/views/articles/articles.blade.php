@extends('app')

@section('content')
	<div class="container">
		<h1 class="header">Articles  <span><a href="{{ action('ArticleController@create') }}" class="btn btn-primary">Add Article</a>
</span></h1>
		<div class="articles">
			@foreach( $articles as $article )
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<h4>
			  		<a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title  }}</a>
			  	</h4>
			  </div>
			  <div class="panel-body">{{ $article->body }}</div>
			  <div class="panel-footer">By {{ $article->author }}&#64;{{ $article->created_at }}</div>
			</div>
			@endforeach
		</div>
	</div>
@stop