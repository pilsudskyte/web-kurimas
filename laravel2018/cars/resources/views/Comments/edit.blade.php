@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h1>Redaguojamas komentaras {{ $comment->id}}</h1>

			<form method="POST" action="{{ route('comments.update', $comment->id ) }}">
				{{ csrf_field() }}

			<input type="text" name="comment_text" required class="form-control"
				value="{{ $comment->comment_text }}">
			<hr>
			<input type="submit" class="btn btn-success" value="Redaguoti komentara">
		</form>
	</div>
		
	</div>
@endsection
