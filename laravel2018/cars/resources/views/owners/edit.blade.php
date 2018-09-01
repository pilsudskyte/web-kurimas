@extends("layouts.app")


@section('content')


<div class="container">

 <a href="{{ route('owners.index') }}"><< Grizti i savininkus</a>

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
<form method="post" action= '{{ route("owners.update", $owners->id) }}'>

 <input type="hidden" name ="userId" 
 value='{{ ($owners) ? $owners["id"]: "" }}'>
 {{ csrf_field()}}

 <h3> Savininkas :</h3> 
<table class="thead-dark">
    <tr>
    <td>  Vardas:  </td>
    <td> <input type="text" name="name" value="{{ $owners->name }}">
 	</td> 
    </tr>

    <tr>
    <td>  Pavarde: </td>
    <td> <input type="text" name="surname" value="{{ $owners->surname }}">
	</td>
    </tr>

    <tr>
    <td>  Mašinos id: </td>
	<td> <input type="text" name="car_id" value="{{ $owners->car_id }}"> 
	</td>
    </tr>

   
    <td> <input type="submit" name="submit" class="btn btn-success" value="Atnaujinti"> </td> 
	<td> </td>
    
    </tr>
</table>
</form>

</div>
@endsection