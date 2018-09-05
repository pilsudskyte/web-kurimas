@extends('layouts.app')

@section('content')
<div class="container">

	<a href="{{ route('cars.index') }}"><< Grizti i automobilius</a>
    <br>
    <a href="{{ route('owners.index') }}"><< Grizti i savininkus</a>
	
	<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
    <img src="{{ $car->image }}" >
      <th scope="col">Mašinos modelis</th>
      <th scope="col">Registracijos Nr.</th>
      <th scope="col">Nuomotojai</th>
    
	<!-- Einame per visa naujienu masyva gauta is newsController -->
    <tr scope="row">
		<td>
			
				<!--  Spausdiname masinos pavadinima -->
				{{ $car->brand }} {{ $car->model }} 
			
        </td>
        <td>
			
				<!--  Spausdiname masinos pavadinima -->
				{{ $car->reg_number }}  
			
        </td>

        <td>
            <div class="table table-hover">
                <h3> Is viso: {{ count($owners)}}  </h3>
                <!-- Suskaiciuoju kiek yra savininku -->
                @if(count($owners) > 0)
                    <!--  Jei yra tai spausdinu juos -->
                    @foreach($owners as $owner)
                        <div class="table table-hover">
                        <span class=>Vardas: {{ $owner->name }}</span><br>
                        <span class=>Pavardė: {{ $owner->surname }}</span>
                        </div>
                    @endforeach
                @else
                    <!-- Jei savininku nera tai atspausdinu kazka kito -->
                    <p>
                        Informacijos apie savininkus nerasta
                    </p>
                @endif
            </div>
        </td>
        </tr>
        
</div>
@endsection



        
	    