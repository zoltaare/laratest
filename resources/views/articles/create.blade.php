@extends('app')

@section('content')

	<div class="container">
		<h1>New Article</h1>
		<hr/>
		
		@include( 'errors.article_error' )

		{!! Form::open( ['url' => 'articles'] ) !!}

			@include( 'articles._form', ['submitButtonText' => 'Add Article'] )

		{!! Form::close() !!}

	</div>
@stop