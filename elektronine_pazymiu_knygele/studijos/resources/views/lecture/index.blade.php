@extends("layouts.apps")

@section('content')

<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

<div class="container">
<h2>PASKAITOS</h2>
<div class="col-md-8">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h5> Iš viso  paskaitų yra: {{ $lectures->count() }} </h5>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)

 <a href="{{ route('lecture.create')}}"><button  type="button" class="btn btn-success">Sukurti naują </button></a>
				<br>
    @endif
    @endif
				<br>
    <div class="my-3 p-3 bg-white rounded shadow-sm justify-content-around align-items-center">
    <table class="table table-responsive{-sm} table-light">
        <th scope="col"> Pavadinimas </th>
        <th scope="col"> Aprašymas  </th> 
    @if(Auth::User())
    @if(Auth::User()->admin == 1)
        <th scope="col"> Taisyti</th> 
        <th scope="col"> Trinti</th> 
    @endif
    @endif
    
	<!-- Einame per visa masinu masyva gauta is lecturesController -->
	@foreach($lectures as $lecture)
    <tr scope="row">
		<td>{{ $lecture->name }} </td>
        <td> {!! $lecture->description!!} </td>
       
    @if(Auth::User())
    @if(Auth::User()->admin == 1)
        <td>
				<a href="{{ route('lecture.edit', $lecture->id)}}"> <button  type="button" class="btn btn-secondary"> Taisyti </button>

        </td>
        <td> 
         <form action="{{ route('lecture.delete', $lecture->id) }}" method="POST">
                            <!--  Su post metodu dirbant sau formom visada butina ideti sita laukeli  -->
                            {{ csrf_field() }}
                            <input
                            class="btn btn-danger"
                            type="submit" value="Trinti">
                        </form>
         </td>
	</tr>
    @endif
    @endif
	@endforeach

        
</table>
@endsection