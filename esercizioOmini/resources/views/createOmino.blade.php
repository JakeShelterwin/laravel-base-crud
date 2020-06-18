@extends('layouts.mainLayout')

@section('content')
  <div class="team">
      <h1>Omino</h1>
      <form class="" action="{{route('storeOmino')}}" method="post">
        @csrf
        @method("POST")
        <label for="firstName">firstName</label>
        <input type="text" name="firstName" value="">
        <br>
        <label for="lastName">lastName</label>
        <input type="text" name="lastName" value="">
        <br>
        <label for="address">address</label>
        <input type="text" name="address" value="">
        <br>
        <label for="code">code</label>
        <input type="text" name="code" value="">
        <br>
        <label for="state">state</label>
        <input type="text" name="state" value="">
        <br>
        <label for="phoneNumber">phoneNumber</label>
        <input type="text" name="phoneNumber" value="">
        <br>
        <label for="role">role</label>
        <input type="text" name="role" value="">
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>
  </div>
@endsection
