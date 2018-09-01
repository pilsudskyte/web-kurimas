@extends("layouts.app")


@section('content')
    <div class="container">
        <div class="col-md-12">
            @if (Session::has('status'))
                <div class="alert alert-info">{{ Session::get('status') }}</div>
            @endif
        </div>
        <h1>Naujienos</h1>
        <a class="btn btn-success"
           href="{{ route('news.create') }}">
            Sukurti naujiena
        </a>
        Is viso naujienu: {{ $newsCount }}
    <!-- Einame per visa naujienu masyva gauta is newsController -->
        @foreach($news as $newsItem)
            <div>
                <h3>
                    <!--  Spausdiname naujienos pavadinima -->
                    <a href="{{  route('news.show', $newsItem->id) }}">
                        {{ $newsItem->title }}
                    </a>
                    <img src="{{ $newsItem->image }}" >
                    <div>
                        {{ $newsItem->description }}
                    </div>

                    <small>
                        Komentaru: {{ $newsItem->comments->count() }}
                        <br>
                        Paskutinis komentaras:
                        @if($newsItem->comments->last())
                            {{ $newsItem->comments->last()->created_at }}
                        @endif
                    </small>
                </h3>
                <p>
                    <!-- Kreipimasis i route'a su parametrais -->
                    <a href="{{ route('news.show', $newsItem->id) }}">
                        Skaityti daugiau
                    </a>
                </p>
            </div>
        @endforeach
    </div>
@endsection