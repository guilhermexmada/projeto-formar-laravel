<?php

namespace App\Http\Controllers;

//dependência adicionada pela função index, vem da model Aluno
use App\Models\Aluno;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    public function index(){

        //método que recupera todos os dados da tabela alunos e armazena num array
        $aluno = Aluno::all();
        
        //retorna os dados da tabela professor para uma view
        //(caminho da view),(array de dados) = 'view.método', ['dado' => $dado]  
        return view('aluno.index', ['aluno'=>$aluno]);
    }

    public function create(){
        //retorna view do formulário de cadastro
        return view('aluno.create');
    }

    //método que realiza cadastro no banco de dados
    //variável passada como argumento é criada a partir da classe Request do Laravel
    //como se estivesse instanciando a classe no argumento
    public function store(Request $request){

        //validação dos dados antes de enviar para o banco usando método validate da classe Request 
        $validateData = $request->validate([
            //dado => tipo de exigência | tipo de dado | valor máximo
            'nome' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'idade' => 'required|string|max:255',
        ]);

        //cria novo registro na tabela alunos
        Aluno::create($validateData);

        //redireciona para outra página 
        //redirect substitui o header('Location: ')
        //with manda uma mensagem junto com o redirecionamento
        return redirect()->route('aluno.create')->with('sucess', 'Aluno cadastrado com sucesso!');
    }
}
