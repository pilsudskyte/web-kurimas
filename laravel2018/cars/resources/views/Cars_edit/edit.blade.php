@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h1>Redaguojama masina {{  $carsItems->id }}</h1>

			<form method="POST" action="{{ route('car.update', $carsItem->id ) }}">
				{{ csrf_field() }}

				<select name="cars_id">
					<option>Pasirinkite masina</option>
					@foreach($allcars as $car)
						<!-- Tikrinam ir uzdedam selected atrributa naujienos itemui kuriam yra priskirtas komentaras -->
						@if($car->id == $car->car_id)
							<option selected value="{{ $carsItem->id }}">{{ $car->model }}</option>
						@else
							<option value="{{ $carsItem->id }}">{{ $car->brand }}</option>
						@endif
						
					@endforeach
				</select>

				<input type="text" name="car_model" 
				required class="form-control"
				value="{{ $car->car_model }}"
				>
				

			<hr>
			<input type="submit" class="btn btn-success" value="Redaguoti masina">
		</form>
	</div>
		
	</div>
@endsection