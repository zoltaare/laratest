@extends('app')

@section('content')

	<div class="container">
		<h1>New Article</h1>
		<hr/>
		{!! Form::open( ['url' => 'articles'] ) !!}
			<!-- Title -->
			<div class="form-group">
				{!! Form::label('title', 'Title:') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}				
			</div>
			<!-- Body -->
			<div class="form-group">
				{!! Form::label('body', 'Body:') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}				
			</div>
			<!-- Published At -->
			<div class="form-group">
				{!! Form::label('published_at', 'Publish On:') !!}
				{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}				
			</div>
			<!-- Submit -->
			<div class="form-group">
				{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}				
			</div>
		{!! Form::close() !!}
	</div>
@stop