@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
    <h1 style="color:blue;">Em Dev...</h1>
    <a href="/img/events/{{ $event->image }}" download="">Baixar</a>
    <a href="/img/events/{{ $event->image }}" target="_blank">Vizualizar</a>
            </div>
        </div>
    </div>


@endsection