@extends('layouts.app')

@section('content')
<div class="container">

	<a href="{{ route('cars.index') }}"><< Grizti</a>
	
	<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mašinos modelis</th>
      <th scope="col">Savininkai</th>
    
	<!-- Einame per visa naujienu masyva gauta is newsController -->
	@foreach($cars as $carsItem)
    <tr scope="row">
		<td>
			
				<!--  Spausdiname masinos pavadinima -->
				{{ $carsItem->brand }} {{ $carsItem->model }}
			
        </td>

        <td>
            <div class=>
                <h2> Is viso: {{ count($owners)}}  </h2>
                <!-- Suskaiciuoju kiek yra savininku -->
                @if(count($owners) > 0)
                    <!--  Jei yra tai spausdinu juos -->
                    @foreach($owners as $owner)
                        <div class=>
                            <div class=>
                            <div class="">
                            
                        </div>
                        <span class=> Vardas: {{ $owner->name }}</span><span class=>Pavardė: {{ $owner->surname }}</span>
                        </div>
                        
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
        @endforeach
        
</div>
@endsection



        
	    