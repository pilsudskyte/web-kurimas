@extends('layouts.apps')

@section('content')

      
<div class="container">

<div class="col-md-12">
  @if (Session::has('status'))
    <div class="alert alert-info">{{ Session::get('status')}}</div>
  @endif
</div>
<!--== Services Area Start ==-->
<section id="service-area" class="home-slider-item slider-bg " class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-left">
       
<div class="container">
<h2>ĮVERTINIMAI</h2>
<div class="col-md-8">
      <a class="btn btn-success" href="{{ route('grades.create') }}">
          Pridėti naują įvertinimą
      </a>
      <h5>Iš viso įvestų įvertinimų: {{ $grades->count() }}</h5>
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm justify-content-around align-items-center">
  <table class="table table-responsive{-sm} table-light">
      <thead><tr>
      <th>Paskaita</th>
      <th>Studentas</th>
      <th>Įvertinimas</th>
      @if(Auth::User())
    @if(Auth::User()->admin == 1)
	<th scope="col"> Taisyti</th> 
	<th scope="col"> Trinti</th>
    @endif
    @endif

      </tr></thead>
      <tbody>
        @foreach($grades as $grade)
        <td><a href="{{ route('lectures.show', $grade->lecture->id) }}">{{ $grade->lecture->name }}</a></td>
        <td><a  href="{{ route('students.show', $grade->student->id) }}">{{ $grade->student->name . ' ' . $grade->student->surname }}</td>
        <td>{{ $grade->grade }}</td>
        <td>
          <div class="btn-group" role="group">
            <a class="btn btn-info" href="{{ route('grades.edit', $grade->id) }}">Redaguoti</a>
            <form action="{{ route('grades.destroy', $grade->id) }}" method="POST">
      							{{ csrf_field() }}
      							<input class="btn btn-danger" type="submit" value="Trinti">
      			</form>
                  </div>
                  </td></tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection