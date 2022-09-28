    <h1>Lista dei film</h1>
    @foreach($movies as $movie)
        <div class="card">
            <h2>Titolo: {{$movie->title}}</h2>
            <h3>Titolo Originale: {{$movie->original_title}}</h3>
            <h3>Nazione: {{$movie->nationality}}</h3>
            <h3>Data di uscita: {{$movie->date}}</h3>
            <h3>voto: {{$movie->vote}}</h3>
        </div>
    @endforeach