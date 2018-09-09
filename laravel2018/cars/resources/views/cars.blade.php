@extends("layouts.app")

@section('content')
<div class="container">
<div class="col-md-8">
  @if (Session::has('status'))
      <div class="alert alert-info">{{ Session::get('status') }}</div>
  @endif
</div>

<p class="font-weight-bold"><h3>AUTOMOBILIAI</h3></p>

<div>
	<a class="btn btn-success" href="{{ route('car.create') }}">Pridėti AUTO</a>
</div>success

	Is viso automobiliu yra: {{ count($cars)}} 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mašinos modelis</th>
			<th scope="col">Registracijos Nr.</th>
      <th scope="col">Nuomotojai</th>
			<th scope="col">Redaguoti</th>
			<th scope="col">Istrinti</th>
    
	<!-- Einame per visa naujienu masyva gauta is newsController -->

	@foreach($cars as $key=>$carsItem)
    <tr scope="row">
		<td>
			
				<!--  Spausdiname masinos pavadinima -->
				{{ $carsItem->brand }}  {{ $carsItem->model }} 
				
        </td>	
				<td>
			
				<!--  Spausdiname masinos nr -->
				{{ $carsItem->reg_number }}  
        </td>	
        </td>
        <td>
			<!-- Kreipimasis i route'a su parametrais -->
				<a href="{{ route('cars.show', $carsItem->id) }}">
                
                 Info
				</a>		
        </td>
				<td>
			<!-- Kreipimasis i route'a su parametrais -->
			<a href="{{ route('car.edit', $carsItem->id) }}">
                
                edit
				</a>		
        </td>
				<td>
						@if($key != 0 && $key != 1)
						<form action="{{ route('car.delete', $carsItem->id) }}" method="POST">
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
@endsection