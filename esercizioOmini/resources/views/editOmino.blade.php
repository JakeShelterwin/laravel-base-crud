@extends('layouts.mainLayout')

@section('content')
  <div class="team">
      <h1>Omino <a href="{{route('showOmino', $omino['id'])}}"><i class="fas fa-long-arrow-alt-left"></i></a></h1>
      <form class="" action="{{route('updateOmino', $omino['id'])}}" method="post">
        @csrf
        @method("POST")
        <label for="firstName">firstName</label>
        <input type="text" name="firstName" value="{{$omino["firstName"]}}">
        <br>
        <label for="lastName">lastName</label>
        <input type="text" name="lastName" value="{{$omino["lastName"]}}">
        <br>
        <label for="address">address</label>
        <input type="text" name="address" value="{{$omino["address"]}}">
        <br>
        <label for="code">code</label>
        <input type="text" name="code" value="{{$omino["code"]}}">
        <br>
        <label for="state">state</label>
        <input type="text" name="state" value="{{$omino["state"]}}">
        <br>
        <label for="phoneNumber">phoneNumber</label>
        <input type="text" name="phoneNumber" value="{{$omino["phoneNumber"]}}">
        <br>
        <label for="role">role</label>
        <input type="text" name="role" value="{{$omino["role"]}}">
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>
  </div>
@endsection
