@extends('layouts.main')

@section ('title', 'Editar Viagem')

@section ('content')

    <div class="container">
        <h1>Edite a viagem </h1>
        <form action="/viagens/update/{{ $viagem-> id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Localizador:</label>
                    <input type="text" class="form-control" name="localizador" value="{{ $viagem->localizador }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Pagamento: </label>
                    <input type="text" class="form-control" name="pagamento"  value="{{ $viagem->pagamento }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Preço Gol: </label>
                    <input type="text" class="form-control"  name="precoGol"  value="{{ $viagem->precogol }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">Preço Voe + </label>
                    <input type="text" class="form-control"  name="precoVoeMais"  value="{{ $viagem->precovoemais }}">
                </div>
                
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection