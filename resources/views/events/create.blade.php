@extends('layouts.main')

@section('title', 'Criar Contato')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um servico:</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="image">Anexe o orçamento:</label>
        <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
        <label for="title">Cliente:</label>
        <select id="title" name="title" class="form-control">
        @foreach($clients as $client)
        <option value="{{ $client->nome }}">{{ $client->nome }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="date">Data do Servico:</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
        <label for="title">Endereco:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Coloque o Endereco">
    </div>
    <div class="form-group">
        <label for="title">Servico é Recorrente?</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descreva o Servico:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Explique o servico"></textarea>
    </div>
    <div class="form-group">
        <label for="title">Selecione os materiais fornecidos pelo cliente:</label>
       <div class="form-group">
        <input type="checkbox" name="items[]" value="Tubulacoes"> Tubulacoes
       </div>
       <div class="form-group">
        <input type="checkbox" name="items[]" value="Ar Condicionado"> Ar Condicionado
       </div>
       <div class="form-group">
        <input type="checkbox" name="items[]" value="Condensadora"> Condensadora
       </div>
       <div class="form-group">
        <input type="checkbox" name="items[]" value="outro"> Outros: 
        <input type="text" class="form-control" id="outro" name="items[]" placeholder="Insira outro">
       </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Serviço">
    </form>
</div>


@endsection