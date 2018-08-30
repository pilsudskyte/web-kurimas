@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h1>Redaguojamas komentaras {{  $comment->id }}</h1>

			<form method="POST" action="{{ route('comments.update', $comment->id ) }}">
				{{ csrf_field() }}

				<select name="news_id">
					<option>Pasirinkite naujiena</option>
					@foreach($allNews as $newsItem)
						<!-- Tikrinam ir uzdedam selected atrributa naujienos itemui kuriam yra priskirtas komentaras -->
						@if($newsItem->id == $comment->news_id)
							<option selected value="{{ $newsItem->id }}">{{ $newsItem->title }}</option>
						@else
							<option value="{{ $newsItem->id }}">{{ $newsItem->title }}</option>
						@endif
						
					@endforeach
				</select>

				<input type="text" name="comment_text" 
				required class="form-control"
				value="{{ $comment->comment_text }}"
				>
				

			<hr>
			<input type="submit" class="btn btn-success" value="Redaguoti komentara">
		</form>
	</div>
		
	</div>
@endsection