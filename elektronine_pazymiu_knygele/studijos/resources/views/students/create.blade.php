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

 <a href="{{ route('students.index') }}"><< Grizti i studentus</a>

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
<form method="post" action= "{{ route('students.store') }}">

 <input type="hidden" name ="studentId" value=''>
 {{ csrf_field()}}
<table class="thead-dark">
    <tr>
    <td>  Vardas:  </td>
    <td> <input type="text" name="name"
    {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
     value="{{ old('name') }}">
  	</td>
    </tr>

    <tr>
    
    <td>  Pavardė: </td>
    <td> <input type="text" name="surname"
    value="{{ old('surname') }}"
    > </td>
    </tr>


    <tr>
    <td>  Emailas:  </td>
    <td> <input type="text" name="email"
    {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
     value="{{ old('email') }}">
  	</td>
    </tr>

    <tr>
    <td>  Tel. Nr.:  </td>
    <td> <input type="text" name="phone"
    {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
     value="{{ old('phone') }}">
  	</td>
    </tr>

    
    <tr>
    <td> <input type="submit" name="submit" class="btn btn-success" value="Pridėti naują"> </td> <td> </td>
    </tr>
    
</table>
</form>

</div>
@endsection
