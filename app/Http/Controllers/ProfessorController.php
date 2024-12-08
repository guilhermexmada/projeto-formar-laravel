<?php

namespace App\Http\Controllers;

//dependência adicionada pela função index, vem da model Professor
use App\Models\Professor;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    
    public function index(){

        //método que recupera todos os dados da tabela professor e armazena num array
        $professor = Professor::all();
        
        //retorna os dados da tabela professor para uma view
        //(caminho da view),(array de dados) = 'view.método', ['dado' => $dado]  
        return view('professor.index', ['professor'=>$professor]);
    }

    public function create(){
        //retorna view do formulário de cadastro
        return view('professor.create');
    }

    //método que realiza cadastro no banco de dados
    //variável passada como argumento é criada a partir da classe Request do Laravel
    //como se estivesse instanciando a classe no argumento
    public function store(Request $request){

        //validação dos dados antes de enviar para o banco usando método validate da classe Request 
        $validateData = $request->validate([
            //dado => tipo de exigência | tipo de dado | valor máximo
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
        ]);

        //cria novo registro na tabela professor
        Professor::create($validateData);

        //redireciona para outra página 
        //redirect substitui o header('Location: ')
        //with manda uma mensagem junto com o redirecionamento
        return redirect()->route('professor.index')->with('sucess', 'Professor cadastrado com sucesso!');
    }
}
