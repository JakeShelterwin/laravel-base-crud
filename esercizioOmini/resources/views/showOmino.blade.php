@extends('layouts.mainLayout')

@section('content')
  <div class="teamMember">
      <h1>Team Member </h1>
      @if (session("success"))
        <p>{{session("success")}}</p>
      @endif

      <table>
        <tbody>
          <tr>
            <td><span>Nome</span></td>
            <td>{{$omino["firstName"]}} {{$omino["lastName"]}}</td>
          </tr>
          <tr>
            <td><span>Indirizzo</span></td>
            <td>{{$omino["address"]}}</td>
          </tr>
          <tr>
            <td><span>CAP</span></td>
            <td>{{$omino["code"]}}</td>
          </tr>
          <tr>
            <td><span>Stato</span></td>
            <td>{{$omino["state"]}}</td>
          </tr>
          <tr>
            <td><span>Telefono</span></td>
            <td>{{$omino["phoneNumber"]}}</td>
          </tr>
          <tr>
            <td><span>Mansione</span></td>
            <td>{{$omino["role"]}}</td>
          </tr>
          <tr>
            <td>
              <a href="{{route('home')}}"><button type="button" name="button">Indietro</button></a>
            </td>
            <td class="staiADestra"><a href="{{route("editOmino",$omino["id"])}}"><button type="button" name="button">Modifica</button></a></td>

          </tr>
        </tbody>
      </table>
      <div class="ATTENZIONE">
        <a href="{{route("deleteOmino", $omino['id'])}}"> <button type="button" name="button">Licenzia</button></a>
      </div>
  </div>
@endsection
