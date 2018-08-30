@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h1>Naujas komentaras</h1>

			<form method="POST" action="{{ route('comments.store') }}">
				{{ csrf_field() }}

				<select name="news_id">
					<option>Pasirinkite naujiena</option>
					@foreach($allNews as $newsItem)
						<option value="{{ $newsItem->id }}">{{ $newsItem->title }}</option>
					@endforeach
				</select>

				<textarea name="comment_text" 
				required class="form-control">
				</textarea>

			<hr>
			<input type="submit" class="btn btn-success" value="Prideti komentara">
		</form>
	</div>
		
	</div>
@endsection