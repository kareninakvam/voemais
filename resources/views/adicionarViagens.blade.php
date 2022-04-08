@extends('layouts.main')

@section ('title', 'Cadastrar Viagem')

@section ('content')

    <div class="container">
        <h1>Cadastre a nova viagem: </h1>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Localizador:</label>
                    <input type="text" class="form-control" placeholder="Nome Completo">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Pagamento: </label>
                    <input type="text" class="form-control" placeholder="CPF sem traços ou pontos">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Preço Gol: </label>
                    <input type="text" class="form-control" placeholder="RG sem traços ou pontos">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Preço Voe + </label>
                    <input type="email" class="form-control" placeholder="Digite um email válido">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel1">Telefone Principal: </label>
                    <input type="text" class="form-control" placeholder="Telefone Principal sem traços ou pontos">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel2">Telefone Secundário: </label>
                    <input type="text" class="form-control" placeholder="Telefone Secundário sem traços ou pontos">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTel2">Endereço: </label>
                    <input type="text" class="form-control" placeholder="Endereço completo, incluindo bairro e cidade">
                </div>
                <div class="form-group col-md-6">
                    <label for="Observacoes">Observações:</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection