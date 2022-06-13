
  @foreach ($games as $game)
    <h1>{{$game->name}}</h1>
    <p>{{$game->excerpt}}</p>
    <p>{{$game->price}}</p>
  @endforeach
