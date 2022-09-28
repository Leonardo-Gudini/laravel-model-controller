@section('content')
    <h2>Lista dei film</h2>
    @foreach($movies as $movie)
        <div class="card">
            <h2>{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>
            <h3>{{$movie->nationality}}</h3>
        </div>
    @endforeach
@endsection