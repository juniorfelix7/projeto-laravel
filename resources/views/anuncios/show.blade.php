@extends('layouts.main')

@section('title', $anuncio->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/anuncios/{{$anuncio->image}}" class= "img-fluid" alt="{{ $anuncio -> title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $anuncio->title}}</h1>
                <p class="anuncio-city"><ion-icon name="location-outline"></ion-icon> Cidade: {{$anuncio->city}}</p>
                <p class="anuncio-price"><ion-icon name="cash-outline"></ion-icon> Valor: {{$anuncio->price}}</p>
                <p class="anuncio-description"><ion-icon name="document-text-outline"></ion-icon> Descrição: {{$anuncio->description}}</p>
                <a href="#" class="btn btn-primary" id="event-submit">Entrar em Contato</a>
                <h3> Detalhes do produto ou serviço </h3>
                <ul id="items-list">
                   @forelse($anuncio->items ?? [] as $item)
                        <li>
                            <ion-icon name="play-outline"></ion-icon> 
                            <span>{{ $item }}</span>
                        </li>
                    @empty
                         <li class="text-muted">
                                <ion-icon name="information-circle-outline"></ion-icon>
                                <span>Nenhum item na lista</span>
                            </li>

                    @endforelse
                    
                </ul>

            </div>
        </div>


    </div>

@endsection