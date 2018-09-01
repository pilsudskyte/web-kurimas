@extends("layouts.app")


@section('content')


<div class="container">

 <a href="{{ route('owners.index') }}"><< Grizti i savininkus</a>

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
<form method="post" action= "{{ route('owners.store') }}">

 <input type="hidden" name ="userId" value=''>
 {{ csrf_field()}}
<table class="thead-dark">
    <tr>
    <td>  Vartotojo vardas:  </td>
    <td> <input type="text" name="name"
    {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
     value="{{ old('name') }}">
  	</td>
    </tr>

    <tr>
    <td>  Vartotojo pavardė: </td>
    <td> <input type="text" name="surname"
    value="{{ old('surname') }}"
    > </td>
    </tr>

    <tr>
    <td>  Mašinos id: </td>
    <td> <input type="text" name="car_id"    
    value="{{ old('car_id') }}"
    > </td>
    
    <tr>
    <td> <input type="submit" name="submit" class="btn btn-success" value="Pridėti naują"> </td> <td> </td>
    </tr>
    
</table>
</form>

</div>
@endsection
