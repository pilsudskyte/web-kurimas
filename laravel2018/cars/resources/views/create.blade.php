@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h1>Nauja masina</h1>

			<form method="POST" action="{{ route('car.store') }}">
				{{ csrf_field() }}

				<select name="cars_id">
					<option>Pasirinkite naujiena</option>
					@foreach($Cars as $cars)
						<option value="{{ $carsItem->id }}">{{ $car->model }}</option>
					@endforeach
				</select>

				<textarea name="car_model" 
				required class="form-control">
				</textarea>

			<hr>
			<input type="submit" class="btn btn-success" value="Prideti masina">
		</form>
	</div>
		
	</div>
@endsection