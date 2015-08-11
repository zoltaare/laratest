@extends('app')

@section('content')

	<div class="container">
		<h1>Edit Article : {{ $article->title }}</h1>
		<hr/>

		@include( 'errors.article_error' )

		{!! Form::model($article, ['method' => 'PATCH' , 'action' => ['ArticleController@update', $article->id] ]) !!}
			
		@include( 'articles._form', ['submitButtonText' => 'Update Article'] )

		{!! Form::close() !!}

	</div>

@stop