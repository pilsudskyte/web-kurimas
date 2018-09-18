@extends('layouts.apps')

@section('content')
<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

  <div class="container">

    <a href="{{ route('students.index') }}">
      ◄ Grįžti atgal į Studentų sąrašą
    </a>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
      <h2>
        Studentas: {{ $student->name . " " . $student->surname }}
      </h2>
    </div>
    <hr>
    <div class ="my-3 p-3 bg-white rounder shadow-sm">
      <h3 class="border-bottom border-gray pb-2 mb-0">
        Įvertinimų: {{ $student->grades->count() }}
      </h3>
      @if(count($student->grades) > 0)
        <table class="table table-responsive{-sm} table-light">
          <thead>
            <tr>
              <th>Paskaita</th>
              <th>Įvertinimas</th>
            </tr>
          </thead>
        <tbody>
              @foreach($student->grades as $grade)
              <tr>
                <td>{{ $grade->lecture->name }}</a></td>
                <td>{{ $grade->grade}}</td>
              
              </tr>
          </tbody>
            @endforeach
        </table>
      @endif
    </div>
  </div>

@endsection