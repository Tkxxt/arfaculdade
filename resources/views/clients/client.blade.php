@extends('layouts.main')

@section('title', 'Clientes')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Clientes:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-client-container">
    @if(count($clients) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">CPF</th>
                <th scope="col">Endereço</th>
            </tr>
        </thead>
    
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td scope="row">{{ $loop->index +1 }}</td>
            <td><a href="/clients/{{ $client->id }}">{{ $client->nome }}</a></td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->telefone }}</td>
            <td>{{ $client->cpf }}</td>
            <td>{{ $client->endereco }}</td>
            
        </tr>
        @endforeach
    </tbody>

</select>
    </table>
    @else
    <p>Voce não tem Clientes, <a href="/clients/create">Adicione Clientes</a></p>
    @endif
</div>

@endsection