@extends("layouts.app")


@section('content')
<div class="container">
	<h2>AUTOMOBILIAI</h2>
	Is viso automobiliu yra: {{ count($cars)}} 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mašinos modelis</th>
			<th scope="col">Registracijos Nr.</th>
      <th scope="col">Savininkai</th>
    
	<!-- Einame per visa naujienu masyva gauta is newsController -->
	@foreach($cars as $carsItem)
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
	</tr>
	@endforeach

</table>
@endsection