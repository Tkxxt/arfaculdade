@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Contratos:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricao</th>
                <th scope="col">Data</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
    
    <tbody>
        @foreach($events as $event)
        <tr>
            <td scope="row">{{ $loop->index +1 }}</td>
            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
            <td>{{ $event->description }}</td>
            <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
            <td>
                <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon></a> 
                <form action="/events/{{ $event->id }}" method="POST">
                <a href="/img/events/{{ $event->image }}" download="{{ $event->title }}" class="btn btn-info down-btn"><ion-icon name="arrow-down-circle-outline"></ion-icon></a>
                <a href="/img/events/{{ $event->image }}" target="_blank" class="btn btn-info view-btn"><ion-icon name="eye-outline"></ion-icon></a>    
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @else
    <p>Voce não tem contratos, <a href="/events/create">Crie seu contrato</a></p>
    @endif
</div>

@endsection