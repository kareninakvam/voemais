@extends('layouts.main')

@section ('title', 'Cadastrar Viagem')

@section ('content')

    <div class="container">
        <h1>Cadastre a nova viagem: </h1>
        <form action="/viagem/cadastrar" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cpf">CPF do cliente: </label>
                    <input type="text" class="form-control"  name="cpf">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Localizador:</label>
                    <input type="text" class="form-control" name="localizador" p>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Pagamento: </label>
                    <input type="text" class="form-control" name="pagamento">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Preço Gol: </label>
                    <input type="text" class="form-control"  name="precoGol">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Preço Voe + </label>
                    <input type="text" class="form-control"  name="precoVoeMais">
                </div>
                
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection