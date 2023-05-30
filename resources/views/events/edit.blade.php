@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="image">Anexe o orçamento:</label>
        <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
        <label for="title">Cliente:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Cliente/Empresa" value="{{ $event->title }}">
    </div>
    <div class="form-group">
        <label for="date">Data do Servico:</label>
        <input type="date" class="form-control" id="date" name="date"  value="{{date('Y-m-d', strtotime($event->date));}}">
    </div>
    <div class="form-group">
        <label for="title">Endereco:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Coloque o Endereco" value="{{ $event->city }}">
    </div>
    <div class="form-group">
        <label for="title">Servico é Recorrente?</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descreva o Servico:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Explique o servico">{{ $event->description }}</textarea>
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
    <input type="submit" class="btn btn-primary" value="Editar Serviço">
    </form>
</div>


@endsection