@extends('layouts.app')

@section('content')
<div class="container">

	<a href="{{ route('news.index') }}"><< Grizti i visas naujienas</a>
	
	<h1>{{ $newsItem->title }}</h1>

	<a
			class="btn btn-info"
			href="{{ route('news.edit', $newsItem->id) }}">Redaguoti</a>

	<form action="{{ route('news.destroy', $newsItem->id) }}" method="POST">
		{{ csrf_field() }}

		<input type="submit" class="btn btn-danger" value="Trinti">
	</form>

	<p>
		{{ $newsItem->content }}
	</p>

	<hr>
	<div class="my-3 p-3 bg-white rounded shadow-sm">
		<h2 class="border-bottom border-gray pb-2 mb-0">Komentarai 
			( {{ $newsItem->comments->count() }} )</h2>
		<!-- Suskaiciuoju kiek yra komentaru -->
		@if(count($newsItem->comments) > 0)
			<!--  Jei komentaru yra tai spausdinu juos -->
			@foreach($newsItem->comments as $comment)
				<div class="media text-muted pt-3">
					<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<div class="d-flex justify-content-between align-items-center w-100">
		              <strong class="text-gray-dark">
		              	{{ $comment->user->email }}
		              </strong>
		            </div>
		            <span class="d-block">
		            	{{ $comment->comment_text }}
		            </span>
		            Paskelbta: {{ $comment->created_at }}
					</div>
				</div>
			@endforeach
		@else
			<!-- Jei komentaru nera tai atspausdinu kazka kito -->
			<p>
				Kolkas komentarų nėra
			</p>
		@endif
	</div>
</div>
@endsection