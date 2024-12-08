<!-- usando estrutura padrão na master -->
@extends('layouts.master');

<!-- definindo conteúdo da página-->
@section('content')
    <h1>Cadastrar novo aluno</h1>

    <!-- action do formulário receberá rota via controlador para o método de cadastro -->
    <form action="{{route('aluno.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="idade">Idade</label>
            <input type="text" name="idade" class="form-control">
        </div>

        <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
    </form>
@endsection

