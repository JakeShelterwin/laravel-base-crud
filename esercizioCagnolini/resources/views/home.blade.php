@extends('mainLayout')

@section('section')
  <div class="centrale">
    <h1>Cagnolini Patriottici</h1>
    <div class="listaCagnolini">
      @foreach ($cagnolini as $cagnolino)
        <p>Cagnolino:  <a href="{{route('showCagnolino', $cagnolino["id"])}}"> {{$cagnolino["nome"]}} </a></p>
      @endforeach
    </div>
  </div>
@endsection
