@extends('layouts.main')

@section('title', 'Criar Anuncio')

@section('content')
<div id="anuncio-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Anúncio</h1>
    <form action="/anuncios" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="image"> Imagem do Produto ou Serviço:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
       <div class="form-group mb-3">
            <label for="title"> Anuncio:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Produto ou Serviço">
        </div>
        <div class="form-group mb-3">
            <label for="city"> Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade onde se encontra">
        </div> 
        <div class="form-group mb-3">
            <label for="price"> Valor:</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Valor do Produto">
        </div> 
        <div class="form-group mb-3">
            <label for="description"> Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do produto ou serviço"></textarea>
        </div>
        <div class="form-group">
            <label for="title"> Detalhes do produto ou serviço:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Novo"> Novo
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Usado"> Usado
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Parcelamento"> Aceita Parcelamento
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Entrega"> Entrega em Domicílio
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Horario"> Agendamento
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Anúncio">
    </form>         
</div>    

@endsection