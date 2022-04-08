@extends('layouts.main')

@section ('title', 'VOE +')

@section ('content')
<!--Busca de clientes  -->
    <section>
        <div class="container"><br><br>
            <form>
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
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Marisa</th>
                <td>13981970586</td>
                <td>marisa@gmail.com</td>
                <td>
                    <a class="table-link" href="/cliente/1"> Mais informações</a>
                </td>
              </tr>
              <tr>
                <th scope="row">Virginia</th>
                <td>11987478987</td>
                <td>Virginia@yahoo.com</td>
                <td>
                    <a class="table-link" href="/cliente/2"> Mais informações</a>
                </td>
              </tr>
              <tr>
                <th scope="row">Luciana</th>
                <td>1197845887</td>
                <td>Luciana@gmail.com</td>
                <td>
                    <a class="table-link" href="/cliente/3"> Mais informações</a>
                </td>
              </tr>
            </tbody>
          </table>
          @endsection