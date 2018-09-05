@@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Visi komentarai</h1>
		<a class="btn btn-success" href="{{ route('comments.create') }}">Pridėti komentarą</a>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th>Komentaro turinys </th>
					<th>Komentaro autorius </th>
					<th>Komentaro naujiena </th>
					<th>Redaguoti</th>
					<th>Istrinti</th>

				</tr>
			</thead>
			@foreach($comments as $key => $comment)
				<tr>
					<td>{{ $comment->comment_text }} </td>
					<td>{{ $comment->user->email }} </td>
					<td>
						<a href="{{ route('news.show', $comment->newsItem->id) }}">
							{{ $comment->newsItem->title }} 
						</a>
					</td>
					<td>
						<a class="btn btn-info" href="{{ route('comments.edit', $comment->id)}}">
							Redaguoti
						</a>
					</td>
					<td>
						@if($key != 0 && $key != 1)
						<form action="{{ route('comments.delete', $comment->id) }}" method="POST">
							<!--  Su post metodu dirbant sau formom visada butina ideti sita laukeli  -->
							{{ csrf_field() }}
							<input 
							class="btn btn-danger"
							type="submit" value="X">
						</form>
						@endif
					</td>

				</tr>
			@endforeach
		</table>
	</div>
@endsection
