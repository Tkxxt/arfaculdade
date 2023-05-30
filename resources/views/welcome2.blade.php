@extends('layouts.main')
@section('title', 'Excelência Ar Condicionado')

@section('content')
        

<div id="search-container" class="col-md-12">
    <h1>Pesquise um contrato:</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por {{ $search }}</h2>
    @else
    <h2>Contratos:</h2>
   
    @endif
    
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">{{ $event->description }}</p>
                <a href="/dashboard" class= "btn btn-primary">Saber Mais</a>
            </div>
        </div>

        @endforeach
        @if(count($events) == 0 && $search)
        <p>Não há Contratos com {{ $search }} <a href="/">Ver Contratos</a></p>
        @elseif(count($events) == 0)
        <p>Não há Contratos</p>
        @endif
    </div>
</div>
@endsection