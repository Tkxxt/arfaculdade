@extends('layouts.main')

@section('title', 'Editando: ' . $client->nome)

@section('content')
<div id="client-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $client->nome }}</h1>
    <form action="/clients/update/{{ $client->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" value="{{ $client->nome }}">
        </div>
        <div class="form-group">
            <label for="title">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email do Cliente" value="{{ $client->email }}">
        </div>
        <div class="form-group">
            <label for="title">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Cliente" value="{{ $client->telefone }}">
        </div>
        <div class="form-group">
            <label for="title">Cpf/CNPJ:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF/CNPJ do Cliente" value="{{ $client->cpf }}">
        </div>
        <div class="form-group">
            <label for="title">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Cliente" value="{{ $client->endereco }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Cliente">
    </form>
@endsection