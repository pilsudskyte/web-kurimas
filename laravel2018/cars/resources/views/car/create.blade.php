@extends('layouts.app')


@section('content')
	<div class="container">
	<a href="{{ route('cars.index') }}"><< Grizti</a>
		<div class="row">
			<div class="col-sm-6">
		<h1>Nauja masina</h1>

			<form method="POST" action="{{ route('car.store') }}">
				{{ csrf_field() }}

				<div class="container">
					<div class="row">
					<div class="col-sm-6">
		

			<form method="POST" action="{{ route('car.create') }}">
				{{ csrf_field() }}
				<h3>Masinos modelis</h3>
				<input type="text" name="model" value="">
				
				<hr>
				<h3>Masinos brand</h3>
				<input type="text" name="brand" value="">
				<hr>
				<h3>Masinos reg_Nr.</h3>
				<input type="text" name="reg_number" value="">
				<hr>
				<h3>Masinos foto</h3>
				<input type="text" name="image" value="">
			
		</form>
			<hr>
			<input type="submit" class="btn btn-success" value="Prideti masina">
		</form>
	</div>
		
	</div>
@endsection