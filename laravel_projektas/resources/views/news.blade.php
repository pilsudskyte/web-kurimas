@extends("layouts.app")


@section('content')
<div class="container">
	<h1>Naujienos</h1>
	Is viso naujienu: {{ $newsCount }}
	<!-- Einame per visa naujienu masyva gauta is newsController -->
	@foreach($news as $newsItem)
		<div>
			<h3>
				<!--  Spausdiname naujienos pavadinima -->
				<a href="{{ route('news.show', $newsItem->id) }}">
					{{ $newsItem->title }}
					<img src="{{ $newsItem->image }}" >
				</a>
				
				<small>
					Komentaru: 
					{{ $newsItem->comments->count() }}
				
					Paskutinis komentaras: 
					{{ $newsItem->comments->last()->created_at }}
				</small>
			</h3>
			<p>
				<!-- Kreipimasis i route'a su parametrais -->
				<a href="{{ route('news.show', $newsItem->id) }}">
					Skaityti daugiau
				</a>
			</p>
		</div>
	@endforeach
</div>
@endsection