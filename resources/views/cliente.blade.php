@extends('layouts.main')

@section ('title', 'Cliente')


@section ('content')
<!--Tabela de dados do cliente  -->
<section><br>
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

@if(1<0)
<!--Tabela de dados das viagens do cliente  -->
  <section>
    <div class ="container">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  @endif
@endsection