@extends('layouts.main')

@section ('title', 'VOE +')

@section ('content')

<!--Busca de clientes  -->
    <section>
        <div class="container">
          <a class="btn btn-light" href = "/clientes/cadastrar">Cadastrar Cliente</a>
          <a class="btn btn-light" href = "/viagens/cadastrar">Cadastrar Viagem</a><br><br>
              <form action="/" method="GET">
                <div class="form-group">
                  <label for="search" class="label-search"><h2>Encontre um contato:</h2> </label>
                  <input type="text" name ="search" class="form-control"  placeholder="Faça sua busca e pressione enter">
                </div>
        </div>
    </section>

<!--Tabela de clientes  -->
    <div class ="container">
        <br><br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($clientes as $cliente)
              <tr>
                <th scope="row">{{$cliente -> nome}}</th>
                <td>{{$cliente -> tel1}}</td>
                <td>{{$cliente -> email}}</td>
                <td>
                    <a class="table-link" href="/clientes/{{$cliente -> id}}"> Mais informações</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @if(count($clientes)== 0 && $search)
            <br><p>Não foi possível encontrar nenhum cliente com o nome {{$search}}. <a href="/"><strong>Clique aqui para ver todos.</strong><a></p>
          @elseif(count($clientes)== 0)
            <br><p>Não há clientes cadastrados. <a href="/clientes/cadastrar"><strong>Clique aqui para adicionar clientes.</strong><a><p>
          @endif
        </div>
          
          @endsection