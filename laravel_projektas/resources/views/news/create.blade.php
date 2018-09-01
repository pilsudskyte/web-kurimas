@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> Naujieno sukurimas </h1>
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
        <form action="{{ route('news.store') }}" method="POST">
            {{ csrf_field() }}
            <input
                    class="form-control"
                    placeholder="Naujienos pavadinimas"
                    {{-- Jei validacija nepraejo, tai atspausdiname senus duomenis--}}
                    value="{{ old('title') }}"
                    type="text" name="title">
            <input
                    placeholder="Naujienos aprasymas"
                    class="form-control" type="text"
                    value="{{ old('description') }}"
                    name="description">
            <label>Turinys:</label>
            <textarea class="form-control" name="content"></textarea>

            <input class="btn btn-success" type="submit">
        </form>
    </div>
@endsection