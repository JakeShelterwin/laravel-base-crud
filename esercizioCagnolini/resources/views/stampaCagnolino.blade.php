@extends('mainLayout')

@section('section')
  <div class="singoloCagnolino">
    <h1>Cagnolino {{$cagnolino["id"]}} </h1>
    Nome: <span>{{$cagnolino["nome"]}}</span> Tipo: <span>{{$cagnolino["tipo"]}},</span> Altezza: <span>{{$cagnolino["altezza"]}}cm</span> Peso: <span>{{$cagnolino["peso"]}}kg</span>
  </div>
@endsection
