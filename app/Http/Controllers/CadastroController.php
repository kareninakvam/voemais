<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        return view('home');
    }

    public function cliente($id){
        return view('cliente', ['id' => $id]);
    }

    public function adicionarClientes(){
        return view('adicionarClientes');
    }

    public function adicionarViagens(){
        return view('adicionarViagens');
    }
}
