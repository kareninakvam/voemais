@extends('layouts.main')

@section ('title', 'Cliente')


@section ('content')



<!--Botões de exclusão e edição -->
<div class="container-do-botao">
  <a class="btn btn-light" href = "/viagens/cadastrar">Cadastrar Viagem</a><br><br>
    <a href="/clientes/edit/{{ $cliente -> id}}" class="btn btn-light">Editar</a>
    
    <form action ="/clientes/{{ $cliente -> id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-dark" name="trash-outline">Excluir</button>
    </form>
</div>
<!--Tabela de dados do cliente  -->
<section>
    <div class ="container" id="tabela-cliente">
      <div class="card" style="width: 29rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item" id="titulo-tabela-cliente"> <strong>{{ $cliente -> nome }}</strong></li>
          <li class="list-group-item"><strong>RG:</strong> {{ $cliente -> rg }}</li>
          <li class="list-group-item"><strong>CPF:</strong> {{ $cliente -> cpf }}</li>
          <li class="list-group-item"><strong>Email:</strong> {{ $cliente -> email }}</li>
          <li class="list-group-item"><strong>Telefone 1:</strong> {{ $cliente -> tel1 }}</li>
          @if($cliente->tel2)
          <li class="list-group-item"><strong>Telefone 2:</strong> {{ $cliente -> tel2 }}</li>
          @endif
          <li class="list-group-item"><strong>Endereço:</strong> {{ $cliente -> endereco }}</li>
          @if($cliente->observacao)
          <li class="list-group-item"><strong>Observações:</strong> {{ $cliente -> observacao }}</li>
          @endif
          
      </div> 
    </div>   
  </section>


@if(count($viagem)>0)
<!--Tabela de dados das viagens do cliente  -->
  <section>
    <div class ="container" id= "tabela-viagem">
      <table class="table table-dark" style="width: 39rem;" >
          <tr>
            <th scope="col">Localizador</th>
            <th scope="col">Pagamento</th>
            <th scope="col">Preço Gol</th>
            <th scope="col">Preço Voemais</th>
            <th scope="col">Ações</th>
          </tr>
            @foreach ($viagem as $viagens)
          <tr>
            <th scope="row">{{ $viagens -> localizador }}</th>
            <td>{{ $viagens->  pagamento}}</td>
            <td>{{ $viagens -> precogol }}</td>
            <td>{{ $viagens-> precovoemais }}</td>
            <td>
                    <a href="/viagens/edit/{{ $viagens -> id}}" class="btn btn-dark" id="bota-edicao">Editar</a>

                    <form action ="/viagens/{{ $viagens -> id}}" method="POST">
                     @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-dark" name="trash-outline">Excluir</button>
              </form>
            </td>
            @endforeach
          </tr>
      </table>
    </div>
  </section>
  @endif
@endsection