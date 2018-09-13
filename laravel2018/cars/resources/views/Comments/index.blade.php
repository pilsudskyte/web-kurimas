@extends("layouts.apps")

	@section('content')
	<section id="service-area" class="home-slider-item slider-bg " class="section-padding">
	<div class="container">
		<h1>Visi atsiliepimai</h1>
		<a class="btn btn-success" href="{{ route('comments.create') }}">Pridėti atsiliepimą</a>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th>Turinys</th>
					<th>Autorius </th>
					<th>Redaguoti</th>
					<th>Istrinti</th>

				</tr>
			</thead>
			@foreach($comments as $comment)
				<tr>
					<td>{{ $comment->comment_text }} </td>
					<td>{{ $comment->user->email }} </td>
				
					<td>
						<a class="btn btn-info" href="{{ route('comments.edit', $comment->id)}}">
							Redaguoti
						</a>
					</td>
					<td>
						<form action="{{ route('comments.delete', $comment->id) }}" method="POST">
							<!--  Su post metodu dirbant sau formom visada butina ideti sita laukeli  -->
							{{ csrf_field() }}
							<input 
							class="btn btn-danger"
							type="submit" value="X">
						</form>
					</td>

				</tr>
			
			@endforeach
		</table>
	</div>
</div>
@endsection


