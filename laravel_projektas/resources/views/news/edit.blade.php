@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>Redaguoti naujiena</h1>
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
        <form action="{{ route('news.update', $newsItem->id) }}" method="POST">
            {{ csrf_field() }}
            <input
                    class="form-control"
                    value="{{ $newsItem->title }}"
                    placeholder="Naujienos pavadinimas"
                    type="text" name="title">
            <input
                    value="{{ $newsItem->description }}"
                    placeholder="Naujienos aprasymas"
                    class="form-control" type="text" name="description">
            <label>Turinys:</label>
            <textarea class="form-control" name="content">
                {{ $newsItem->content }}
            </textarea>

            <input class="btn btn-success" type="submit">
        </form>
    </div>
@endsection