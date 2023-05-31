<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        
        $clients = Client::all();
        
        return view('clients.client', ['clients' => $clients ]);

    }

    public function create(){
        return view('clients.create');

    }

    public function store(Request $request){

        $client = new Client;

        $client->nome = $request->nome;
        $client->endereco = $request->endereco;
        $client->telefone = $request->telefone;
        $client->email = $request->email;
        $client->cpf = $request->cpf;

        $client->save();

        return redirect('/clients')->with('msg', 'Cliente Adicionado');

    }

 
}
