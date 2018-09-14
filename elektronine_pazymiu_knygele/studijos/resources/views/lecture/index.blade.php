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
<h2>PASKAITOS</h2>
<div class="col-md-8">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h5> Viso paskaitų yra: {{ $lectures->count() }} </h5>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)

 <a href="{{ route('lecture.create')}}"><button  type="button" class="btn btn-success">Sukurti naują </button></a>
				<br>
    @endif
    @endif
				<br>
	<table class="table">
			<thead class="thead-dark">
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
				<a href="{{ route('lecture.edit', $lecture->id)}}"> <button  type="button" class="btn btn-secondary"> Edit </button>

        </td>
        <td> 
         <form action="{{ route('lecture.delete', $lecture->id) }}" method="POST">
                            <!--  Su post metodu dirbant sau formom visada butina ideti sita laukeli  -->
                            {{ csrf_field() }}
                            <input
                            class="btn btn-danger"
                            type="submit" value="X">
                        </form>
         </td>
	</tr>
    @endif
    @endif
	@endforeach

    
</table>
@endsection