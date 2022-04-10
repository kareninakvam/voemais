@extends('layouts.main')

@section ('title', 'Editando: ')

@section ('content')
    <div class="container"><br>
        <h1>Editando: {{ $cliente->nome }} </h1>
        <form action="/clientes/update/{{ $cliente-> id }}" method ="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome:</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" name="nome" value="{{ $cliente->nome }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF: </label>
                    <input type="text" class="form-control" placeholder="CPF sem traços ou pontos" id="cpf" name="cpf"  value="{{ $cliente->cpf }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">RG: </label>
                    <input type="text" class="form-control" placeholder="RG sem traços ou pontos"  id="rg" name="rg"  value="{{ $cliente->rg }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Email: </label>
                    <input type="email" class="form-control" placeholder="Digite um email válido" id="email" name="email"  value="{{ $cliente->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel1">Telefone Principal: </label>
                    <input type="text" class="form-control" placeholder="Telefone Principal sem traços ou pontos"  id="tel1" name="tel1"  value="{{ $cliente->tel1 }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel2">Telefone Secundário: </label>
                    <input type="text" class="form-control" placeholder="Telefone Secundário sem traços ou pontos" id="tel2" name="tel2"  value="{{ $cliente->tel2 }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel2">Endereço: </label>
                    <input type="text" class="form-control" placeholder="Endereço completo, incluindo bairro e cidade" id="endereco" name="endereco"  value="{{ $cliente->endereco }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="Observacoes">Observações:</label>
                    <textarea class="form-control" rows="3"  id="observacao" name="observacao"  value="{{ $cliente->observacao }}"></textarea>
                </div>
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection