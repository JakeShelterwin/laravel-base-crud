@extends('layouts.mainLayout')

@section('content')
  <div class="team">
      <h1>Team</h1>
      <ul>
        <li>
          <a href="{{route("createOmino")}}">Aggiungi Omino</a>
        </li>
        @foreach ($omini as $omino)
          <li>
            <p>Omino di nome
              <span> {{$omino["firstName"]}} {{$omino["lastName"]}}</span> telefono <span>{{$omino["phoneNumber"]}}</span>  <a href="{{route("showOmino",$omino["id"] )}}">vedi dettagli</a></p> 
          </li>
        @endforeach
      </ul>
  </div>
@endsection
