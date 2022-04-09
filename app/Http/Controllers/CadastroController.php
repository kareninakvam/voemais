<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class CadastroController extends Controller
{
    public function index(){

        $clientes = Cliente::all();
        return view('home', ['clientes' => $clientes]);
    }

    public function adicionarClientes(){
        return view('adicionarClientes');
    }

    public function adicionarViagens(){
        return view('adicionarViagens');
    }

    public function store(Request $request){
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->email = $request->email;
        $cliente->tel1 = $request->tel1;
        $cliente->tel2 = $request->tel2;
        $cliente->endereco = $request->endereco;
        $cliente->observacao = $request->observacao;

        $cliente-> save();

        return redirect ('/');

    }

    public function show($id){
        $cliente = Cliente::findOrFail($id); 
        return view('cliente', ['cliente' => $cliente]);
    }
}
