@extends("layouts.apps")


@section('content')
<section id="service-area" class="home-slider-item slider-bg-1 " class="section-padding">  
       
    <div class="container">

        <a href="{{ route('lecture.index') }}"><< Grizti i paskaitas</a>

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
            <form method="post" action= "{{ route('lecture.store') }}">

                <input type="hidden" name ="lectureId" value=''>
                {{ csrf_field()}}
                    <table class="thead-dark">
                        <tr>
                            <td>  Paskaitos pavadinimas </td>
                            <td> <input type="text" name="name"
                            {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
                            value="{{ old('name') }}">
                            </td>
                        </tr>

                        <tr>
                            <td>  Paskaitos aprašymas </td>
                                <td> <textarea type="text" name="description"
                            value="{{ old('description') }}"></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td> <input type="submit" name="submit" class="btn btn-success" value="Pridėti naują"> </td> <td> </td>
                        </tr>
                        
                    </table>
            </form>

    </div>

@endsection
