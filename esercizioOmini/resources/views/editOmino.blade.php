@extends('layouts.mainLayout')

@section('content')
  <div class="teamMember">

      <h1>Modifica Dati Dipendente</h1>
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
      @endif


      <form class="" action="{{route('updateOmino', $omino['id'])}}" method="post">
        @csrf
        @method("POST")
        <table>
        <tbody>
          <tr>
            <td><label for="firstName">Nome</label></td>
            <td><input type="text" name="firstName" value="{{old('firstName', $omino['firstName'])}}"></td>
          </tr>
          <tr>
            <td><label for="lastName">Cognome</label></td>
            <td><input type="text" name="lastName" value="{{old("lastName", $omino['lastName'])}}"></td>
          </tr>
          <tr>
            <td><label for="address">Indirizzo</label></td>
            <td><input type="text" name="address" value="{{old("address", $omino['address'])}}"></td>
          </tr>
          <tr>
            <td><label for="code">CAP</label></td>
            <td><input type="text" name="code" value="{{old("code", $omino['code'])}}"></td>
          </tr>
          <tr>
            <td><label for="state">Stato</label></td>
            <td><input type="text" name="state" value="{{old("state", $omino['state'])}}"></td>
          </tr>
          <tr>
            <td><label for="phoneNumber">Telefono</label></td>
            <td><input type="text" name="phoneNumber" value="{{old("phoneNumber", $omino['phoneNumber'])}}"></td>
          </tr>
          <tr>
            <td><label for="role">Ruolo</label></td>
            <td><input type="text" name="role" value="{{old("role", $omino['role'])}}"></td>
          </tr>
          <tr>
            <td><a href="{{route('showOmino', $omino['id'])}}"><button type="button" name="button">Indietro</button></a></td>
            <td><button type="submit" name="submit">Salva</button></td>
          </tr>
        </tbody>
      </table>
      </form>
  </div>
@endsection
