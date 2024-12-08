@extends('layouts.master') <!-- Extende a estrutura padrão da master -->

@section('title', 'Professores') <!-- Adiciona o campo título com conteúdo Professores -->

@section('content') <!-- Adiciona o campo título com conteúdo HTML -->
    <h1>Lista dos professores</h1>

    <!-- Recuperando dados da model na função index -->

    <ul>
        @foreach ($professor as $prof)
            <li>
                Nome: {{ $prof->nome }} - CPF: {{$prof->cpf}} - Telefone: {{$prof->telefone}}
            </li>
        @endforeach
    </ul>
@endsection
