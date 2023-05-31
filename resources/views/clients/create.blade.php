@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')
<div id="client-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um Cliente:</h1>
    <form action="/clients" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
        </div>
        <div class="form-group">
            <label for="title">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email do Cliente">
        </div>
        <div class="form-group">
            <label for="title">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Cliente">
        </div>
        <div class="form-group">
            <label for="title">Cpf/CNPJ:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF/CNPJ do Cliente">
        </div>
        <div class="form-group">
            <label for="title">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Cliente">
        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar Cliente">
    </form>
@endsection