@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h1>Naujas atsipiepimas</h1>

			<form method="POST" action="{{ route('comments.store') }}">
				{{ csrf_field() }}
			
					@foreach($comments as $comment)
						<option value="{{ $comment->id }}">{{ $comment->comment_text }}</option>
					@endforeach
				

				<textarea name="comment_text" 
				required class="form-control">
				</textarea>

			<hr>
			<input type="submit" class="btn btn-success" value="Prideti komentara">
		</form>
	</div>
		
	</div>
@endsection