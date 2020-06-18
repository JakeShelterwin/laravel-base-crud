@extends('layouts.mainLayout')

@section('content')
  <div class="team">
      <h1>Team Member</h1>
      <ul>
          <li>
            Omino di nome
              <span> {{$omino["firstName"]}} {{$omino["lastName"]}}</span>
          </li>
          <li>indirizzo: <span>{{$omino["address"]}}</span> </li>
          <li>CAP: <span>{{$omino["code"]}}</span> </li>
          <li>stato: <span>{{$omino["state"]}}</span> </li>
          <li>numero di Telefono: <span>{{$omino["phoneNumber"]}}</span> </li>
          <li>mansione: <span>{{$omino["role"]}}</span> </li>
          <li>  Modifica <a href="{{route("editOmino",$omino["id"])}}"><i class="fas fa-user-edit"></i></a>
          Licenzialo  <a href="{{route("deleteOmino", $omino['id'])}}"> <i class='fas fa-times'></i> </a> </li>

      </ul>
  </div>
@endsection
