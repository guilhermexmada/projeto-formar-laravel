<!-- usando estrutura padrão na master -->
@extends('layouts.master');

<!-- definindo conteúdo da página-->
@section('content')
    <h1>Cadastrar novo professor</h1>

    <!-- action do formulário receberá rota via controlador para o método de cadastro -->
    <form action="{{route('professor.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
    </form>
@endsection

