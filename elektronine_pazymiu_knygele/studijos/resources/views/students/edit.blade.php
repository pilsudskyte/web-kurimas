@extends("layouts.apps")

@section('content')
<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

<div class="container">

 <a href="{{ route('students.index') }}"><< Grizti i studentus</a>

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
<form method="post" action= '{{ route("students.update", $students->id) }}'>

 <input type="hidden" name ="userId" 
 value='{{ ($students) ? $students["id"]: "" }}'>
 {{ csrf_field()}}

 <h3> Studentas :</h3> 
<table class="thead-dark">
    <tr>
    <td>  Vardas:  </td>
    <td> <input type="text" name="name" value="{{ $students->name }}">
 	</td> 
    </tr>

    
    <tr>
    <td>  Pavarde: </td>
    <td> <input type="text" name="surname" value="{{ $students->surname }}">
	</td>
    </tr>

    
    <tr>
    <td>  Emailas: </td>
    <td> <input type="text" name="email" value="{{ $students->email }}">
	</td>
    </tr>

    <tr>
    <td>  Tel. Nr.: </td>
	<td> <input type="text" name="phone" value="{{ $students->phone }}"> 
	</td>
    </tr>

    <td> <input type="submit" name="submit" class="btn btn-success" value="Atnaujinti"> </td> 
	<td> </td>
    
    </tr>
</table>
</form>

</div>
@endsection