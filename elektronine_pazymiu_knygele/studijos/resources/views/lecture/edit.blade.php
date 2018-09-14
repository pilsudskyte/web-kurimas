@extends("layouts.apps")


@section('content')

<!--== Services Area Start ==-->
<section id="service-area" class="home-slider-item slider-bg " class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-left">
    

<div class="container">

 <a href="{{ route('lecture.index') }}"><< Grizti i paskaitas</a>

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
<form method="post" action= '{{ route("lecture.update", $lecture->id) }}'>

 <input type="hidden" name ="lectureId" 
 value='{{ ($lecture) ? $lecture["id"]: "" }}'>
 {{ csrf_field()}}

 <h3> PASKAITA :</h3> 
<table class="thead-dark">
    <tr>
    <td>  Pavadinimas:  </td>
    <td> <input type="text" name="name" value="{{ $lecture->name }}">
 	</td> 
    </tr>

    <tr>
    <td>  Paskaitos aprasymas: </td>
    <td> <textarea type="text" name="description" value="{{ $lecture->description }}"></textarea>
	</td>
    </tr>

   
    <td> <input type="submit" name="submit" class="btn btn-success" value="Atnaujinti"> </td> 
	<td> </td>
    
    </tr>
</table>
</form>

</div>
@endsection