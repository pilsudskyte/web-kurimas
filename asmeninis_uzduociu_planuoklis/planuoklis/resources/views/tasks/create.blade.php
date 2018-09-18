@extends("layouts.app")

@section('content')
<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  

<div class="container">

 <a href="{{ route('tasks.index') }}"><< Grizti i planuoklį</a>


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
<form method="post" action= "{{ route('tasks.store') }}">

 <input type="hidden" name ="taskId" value=''>
 {{ csrf_field()}}
<table class="thead-dark">
    <tr>
        <td>  Pavadinimas:  </td>
        <td> <input type="text" name="name"
        {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
        value="{{ old('name') }}">
        </td>
    </tr>

    <tr>
        <td>  Aprašymas:  </td>
        <td> <input type="text" name="description "
        value="{{ old('description ') }}">
        </td>
    </tr>
    
    <tr>
        <td>  Status id:   </td>
        <td> <input type="text" name="status_id"
        {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
        value="{{ old('status_id ') }}">
        </td>
    </tr>

    <tr>
        <td>  Pražia:   </td>
        <td> <input type="text" name="add_date "
        {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
        value="{{ old('add_date ') }}">
        </td>
    </tr>

    <tr>
        <td>  Pabaiga:  </td>
        <td> <input type="text" name="completed_date"
        {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
        value="{{ old('completed_date') }}">
        </td>
    </tr>
    
    <tr>
        <td> <input type="submit" name="submit" class="btn btn-success" value="Pridėti naują"> </td>
        <td> 
        </td>
    </tr>
    
</table>
</form>

</div>
@endsection
