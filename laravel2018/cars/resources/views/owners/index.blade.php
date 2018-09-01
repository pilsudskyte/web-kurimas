@extends("layouts.app")


@section('content')

       

<div class="container">
<h2>SAVININKAI</h2>
<div class="col-md-8">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h5> Viso savininkų yra: {{ $owners->count() }} </h5>

 <a href="{{ route('owners.create')}}"><button  type="button" class="btn btn-success">Sukurti naują </button></a>
				<br>
				<br>
	<table class="table">
			<thead class="thead-dark">
    <th scope="col"> Vardas </th>
    <th scope="col"> Pavardė  </th> 
    <th scope="col"> Mašinos modelis </th> 
		<th scope="col"> Taisyti</th> 
		<th scope="col"> Trinti</th> 
    
	<!-- Einame per visa masinu masyva gauta is ownersController -->
	@foreach($owners as $owner)
    <tr scope="row">
			<td>{{ $owner->name }} </td>
        <td> {{ $owner->surname }} </td>
        <td> <a href="{{ route('owners.show', $owner->car_id) }}">
                
								Info
			 </a>		</td>
      
        <td>
				<a href="{{ route('owners.edit', $owner->id)}}"> <button  type="button" class="btn btn-secondary"> Edit </button>
				</a>
              
		
        </td>
        <td>  
         <form action="{{ route('owners.delete', $owner->id) }}" method="POST">
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
@endsection