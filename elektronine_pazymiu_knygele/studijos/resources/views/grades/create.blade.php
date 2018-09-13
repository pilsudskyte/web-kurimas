@extends('layouts.apps')

@section("content")
<!--== Services Area Start ==-->
<section id="service-area" class="home-slider-item slider-bg " class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-left">
       
  <div class="container">
    <a href="{{ route('grades.index') }}">
      ◄ Grįžti atgal į Įvertinimų sąrašą
    </a>
    <h1>Naujo įvertinimo įdėjimas</h1>
    <div class="col-md-12">
      @if (Session::has('status'))
        <div class="alert alert-info">{{ Session::get('status')}}</div>
      @endif
    </div>
    <!-- Klaidų išvedimas pagal laravelio validatorių -->
    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!--  -->
  <form method="POST" action="{{ route('grades.store') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xl-3 col-md-4">
            <label>Paskaita</label>
            <select class="form-control" name="lecture_id">
              @foreach($lectures as $lecture)
                <option value="{{ $lecture->id }}">{{ $lecture->name }}</option>
              @endforeach
            </select>
      </div>
      <div class="col-xl-3 col-md-4">
            <label>Studentas</label>
            <select class="form-control" name="student_id">
              @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->name . " " . $student->surname }}</option>
              @endforeach
            </select>
      </div>
      <div class="col-xl-3 col-md-2">
            <label>Įvertinimas</label>
            <select class="form-control" name="grade">
              @for($i = 0; $i <=10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
              @endfor
            </select>
      </div>
      <div class="col-xl-3 col-md-2">
        <div>Veiksmas</div>
        <input type="submit" class="btn btn-lg btn-success" value="Pridėti">
      </div>
    </div>
  </form>
  </div>
@endsection