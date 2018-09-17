@extends("layouts.apps")

@section('content')

<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

<div class="container">
<h2>STUDENTAI</h2>
<div class="col-md-12">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h5> Iš viso  studentų yra: {{ $students->count() }} </h5>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)
 <a href="{{ route('students.create')}}"><button  type="button" class="btn btn-success">Sukurti naują </button></a>
		<br>
    @endif
    @endif
		<br>
    <div class="my-3 p-3 bg-white rounded shadow-sm justify-content-around align-items-center">
    <table class="table table-responsive{-sm} table-light">
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
        <td>
			<!-- Kreipimasis i route'a su parametrais -->
          <a href="{{ route('students.show', $student->id) }}">
                
                 Info
				</a>		
        </td>
        <td> {{ $student->email }} </td>
        <td> {{ $student->phone }} </td>
        <td>
    @if(Auth::User())
    @if(Auth::User()->admin == 1)  
            <a href="{{ route('students.edit', $student->id)}}"> <button  type="button" class="btn btn-info"> Taisyti </button>
            </a>
        </td>
        <td>  
    
        <form action="{{ route('students.delete', $student->id) }}" method="POST">
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