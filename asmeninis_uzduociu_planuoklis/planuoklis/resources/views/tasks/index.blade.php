@extends("layouts.app")

@section('content')

<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

<div class="container">
<h2>Planuoklis</h2>
<div class="col-md-12">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h5> Iš viso suplanuotų namų darbų: {{ $tasks->count() }} </h5>

    <select class="form-control" type="text" name="status_id">
              @foreach($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->name }}</option>
              @endforeach
    </select>
        <br>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)
 <a href="{{ route('tasks.create')}}"><button  type="button" class="btn btn-success">Sukurti naują </button></a>
		<br>
    @endif
    @endif
		<br>
    <div class="my-3 p-3 bg-white rounded shadow-sm justify-content-around align-items-center">
    <table class="table table-responsive{-sm} table-light">
    <th scope="col"> Pavadinimas </th>
    <th scope="col"> Aprašymas </th> 
    <th scope="col"> Statusas</th>
    <th scope="col"> Pradėta </th> 
    <th scope="col"> Baigta </th> 


    @if(Auth::User())
    @if(Auth::User()->admin == 1)
	<th scope="col"> Taisyti</th> 
	<th scope="col"> Trinti</th>
    @endif
    @endif
    
	<!-- Einame per visa tasku masyva gauta is tasksController -->
	@foreach($tasks as $task)
    <tr scope="row">
		<td>{{ $task->name }} </td>
        <td> {{ $task->description }} </td>
        <td>{{ $status->name }}</td>
        <td> {{ $task->add_date }} </td>
        <td> {{ $task->completed_date }} </td>
        <td>
    @if(Auth::User())
    @if(Auth::User()->admin == 1)  
            <a href="{{ route('tasks.edit', $task->id)}}"> <button  type="button" class="btn btn-info"> Taisyti </button>
            </a>
        </td>
        <td>  

        <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
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