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
<h2>STUDENTAI</h2>
<div class="col-md-12">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h5> Viso studentų yra: {{ $students->count() }} </h5>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)
 <a href="{{ route('students.create')}}"><button  type="button" class="btn btn-success">Sukurti naują </button></a>
		<br>
    @endif
    @endif
		<br>
	<table class="table">
		<thead class="thead-dark">
    <th scope="col"> Vardas </th>
    <th scope="col"> Pavardė  </th>
    <th scope="col"> Info </th>  
    <th scope="col"> emailas </th>
    <th scope="col"> Tel. Nr. </th> 

    @if(Auth::User())
    @if(Auth::User()->admin == 1)
	<th scope="col"> Taisyti</th> 
	<th scope="col"> Trinti</th>
    @endif
    @endif
    
	<!-- Einame per visa studentu masyva gauta is studentsController -->
	@foreach($students as $student)
    <tr scope="row">
		<td>{{ $student->name }} </td>
        <td> {{ $student->surname }} </td>
        <td></td>
        <td> {{ $student->email }} </td>
        <td> {{ $student->phone }} </td>
        <td>
    @if(Auth::User())
    @if(Auth::User()->admin == 1)  
            <a href="{{ route('students.edit', $student->id)}}"> <button  type="button" class="btn btn-secondary"> Taisyti </button>
            </a>
        </td>
        <td>  
    
        <form action="{{ route('students.delete', $student->id) }}" method="POST">
            <!--  Su post metodu dirbant sau formom visada butina ideti sita laukeli  -->
            {{ csrf_field() }}
            <input
            class="btn btn-danger"
            type="submit" value="Ištrinti">
        </form>
     
        </td>
	</tr>
    @endif
    @endif

	@endforeach

    
</table>
@endsection