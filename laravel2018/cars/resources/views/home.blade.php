@extends('layouts.apps')

@section('content')
<section id="service-area" class="home-slider-item slider-bg " class="section-padding">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prisijungimas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Jūs esate prisijungęs!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection