@extends('layouts.main')

@section('title', 'Nível3 Serviços')

@section('content')

<div id="search-container" class="col-md-12">
    <h1> Busque um anúncio</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="anuncios-container" class="col-md-12">
    <h2> Últimos anúncios </h2>
    <p class="subtitle"> Veja os últimos anúncios feitos </p>

    <div id="cards-container" class="row">
       @foreach($anuncios as $anuncio)
        <div class="card col-md-3">
            <img src="/img/anuncios/{{$anuncio->image}}" alt="{{ $anuncio -> title }}">
            <div class="card-body">
                <p class="card-date"> 10/09/2025 </p>
                <h5 class="card-title">{{ $anuncio->title}}</h5>
                <p class="card-city"> Cidade: {{$anuncio->city}} </p>
                <p class="card-city"> Valor: {{$anuncio->price}} </p>
                <a href="/anuncios/{{$anuncio->id}}" class="btn btn-primary"> Saber mais</a>
            </div>
        </div>
       
       @endforeach
    
    </div>
</div>

@endsection



