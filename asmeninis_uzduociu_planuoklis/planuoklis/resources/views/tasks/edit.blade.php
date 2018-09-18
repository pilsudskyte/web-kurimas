@extends("layouts.app")

@section('content')
<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

<div class="container">

 <a href="{{ route('tasks.index') }}"><< Grįžti i planuoklį</a>

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
<form method="post" action= '{{ route("tasks.update", $tasks->id) }}'>

 <input type="hidden" name ="userId" 
 value='{{ ($tasks) ? $tasks["id"]: "" }}'>
 {{ csrf_field()}}

 <h3> Planuoklis (suveskite duomenis):</h3> 
<table class="thead-dark">
    <tr>
        <td>  Pavadinimas:  </td>
        <td> <input type="text" name="name" value="{{ $tasks->name }}">
        </td> 
    </tr>

    
    <tr>
        <td>  Aprašymas: </td>
        <td> <input type="text" name="description" value="{{ $tasks->description }}">
        </td>
    </tr>

<tr>
        <td>  Aprašymas: </td>
        <td> <input type="text" name="status_id" value="{{ $tasks->status_id}}">
        </td>
    </tr>
    
    <tr>
        <td>  Pražia: </td>
        <td> <input type="text" name="add_date" value="{{ $tasks->add_date }}">
        </td>
    </tr>

    <tr>
        <td>  Pabaiga: </td>
        <td> <input type="text" name="completed_date" value="{{ $tasks->completed_date }}"> 
        </td>
    </tr>

    <td> <input type="submit" name="submit" class="btn btn-success" value="Atnaujinti"> </td> 
	<td> </td>
    
    </tr>
</table>
</form>

</div>
@endsection