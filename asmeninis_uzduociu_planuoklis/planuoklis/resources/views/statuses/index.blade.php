@extends('layouts.app')

@section('content')

<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">    
<div class="container">

<div class="col-md-12">
  @if (Session::has('status'))
    <div class="alert alert-info">{{ Session::get('status')}}</div>
  @endif
</div>

<div class="container">
<h2>Statusas</h2>
<h5>Iš viso statsų: {{ $statuses->count() }}</h5>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)
      <a class="btn btn-success" href="{{ route('statuses.create') }}">
          Pridėti naują statusą
      </a>
      <br>
    @endif
    @endif
				<br>


<div class="my-3 p-3 bg-white rounded shadow-sm justify-content-around align-items-center">
  <table class="table table-responsive{-sm} table-light">
      <thead><tr>
      <th>Pavadinimas</th>

    @if(Auth::User())
    @if(Auth::User()->admin == 1)
	<th scope="col"> Taisyti</th> 
	<th scope="col"> Trinti</th>
    @endif
    @endif

    </tr>
  </thead>
      <tbody>
      @foreach($statuses as status)
        <td>{{ $status->statuses->name }}</td>
    @if(Auth::User())
    @if(Auth::User()->admin == 1)
        <td>
          <div class="btn-group" role="group">
            <a class="btn btn-info" href="{{ route('grades.edit', $grade->id) }}">Taisyti</a>
            <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
      							{{ csrf_field() }}
          <td>
      							<input class="btn btn-danger" type="submit" value="Trinti">
          </td>
      			</form>
          </div>
        </td>
    @endif
    @endif
      </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection