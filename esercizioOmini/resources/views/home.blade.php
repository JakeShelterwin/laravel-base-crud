@extends('layouts.mainLayout')

@section('content')
  <div class="team">
      @if (session("success"))
        <p>{{session("success")}}</p>
      @endif
      <h3>
        <a href="{{route("createOmino")}}">Aggiungi Dipendente</a>
      </h3>
      <ul>
        @foreach ($omini as $omino)
          <li>
            <p>Dipendente <br>
              <span> {{$omino["firstName"]}} {{$omino["lastName"]}}</span> <br> Ruolo <br> <span>{{$omino["role"]}}</span><br>
              <a href="{{route('showOmino', $omino['id'])}}"><button type="button" name="button">Dettagli Dipendente</button></a>
            </p>
          </li>
        @endforeach
      </ul>
  </div>
@endsection
