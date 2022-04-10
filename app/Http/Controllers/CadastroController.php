<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Viagem;

class CadastroController extends Controller
{
    public function index(){
        $search = request ('search');

        if ($search){
            $clientes = Cliente::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $clientes = Cliente::orderBy('nome',  'ASC')->get();
        }

        return view('home', ['clientes' => $clientes, 'search' => $search]);
    }

    public function adicionarClientes(){
        return view('adicionarClientes');
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
        $cpf = $cliente->cpf;
        $viagem = Viagem::where([
         ['cpf', $cpf]
        ])->get();

        return view('cliente', ['cliente' => $cliente, 'viagem' => $viagem]);
    }

    public function destroy($id){
        
        Cliente::findOrFail($id)->delete();
        return redirect ('/');
    }

    public function edit($id){

        $cliente = Cliente::findOrFail($id); 
    
        return view ('editarCliente', ['cliente'=> $cliente]);
    }

    public function update(Request $request){
        Cliente::findOrFail($request->id)->update ($request->all());
        return redirect ('/');
    }



    //Relacionados às Viagens

    public function adicionarViagens(){
        return view('adicionarViagens');
    }


    public function storeViagens(Request $request){

       $viagem = new Viagem;
        $viagem->localizador = $request->localizador;
        $viagem->pagamento = $request->pagamento;
        $viagem->precovoemais = $request->precoVoeMais;
        $viagem->precogol = $request->precoGol;
        $viagem->cpf = $request->cpf;
        
    
        $viagem-> save();

        return redirect ('/');

    }

    public function destroyViagens($id){

        Viagem::findOrFail($id)->delete();
        return redirect ('/');
    }

    public function editViagens($id){

        $viagem = Viagem::findOrFail($id); 
        return view ('editarViagem', ['viagem'=> $viagem]);
    }

    public function updateViagens(Request $request){
        Viagem::findOrFail($request->id)->update ($request->all());
        return redirect ('/');
    }
}
