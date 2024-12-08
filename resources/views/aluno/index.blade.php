@extends('layouts.master')

@section('content')
    <h1>Lista dos alunos</h1>
    <!-- Recuperando dados da model na função index -->

    <ul>
        @foreach ($aluno as $alu)
            <li>
                Nome: {{ $alu->nome }} - Email: {{ $alu->email }} - Idade: {{ $alu->idade }}
            </li>
        @endforeach
    </ul>
@endsection
