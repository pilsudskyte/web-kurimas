@extends('layouts.app')


@section('content')
<div class="container">
{{-- Klaidu isvedimas pagal laravelio validatoriu--}}
       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
     @endif
<a href="{{ route('cars.index') }}"><< Grizti</a>
		<div class="row">
			<div class="col-sm-6">
		

			<form method="POST" action="{{ route('car.update', $car->id ) }}">
				{{ csrf_field() }}
				<h3>Masinos modelis</h3>
				<input type="text" name="model" value="{{ $car->model }}">
				<hr>
				<h3>Masinos brand</h3>
				<input type="text" name="brand" value="{{ $car->brand }}">
				<hr>
				<h3>Masinos reg_Nr.</h3>
				<input type="text" name="reg_number" value="{{ $car->reg_number }}">
				<hr>
				<h3>Masinos foto</h3>
				<input type="text" name="image" value="{{ $car->image }}">	
			<hr>
			<input type="submit" class="btn btn-success" value="Redaguoti masina">
		</form>
	</div>
		
	</div>
	
@endsection

