<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    //Nome da tabela do banco de dados
    protected $table = 'alunos';
    //nome dos atributos que serão enviados pelo controlador
    protected $fillable = ['nome', 'email', 'idade'];
}
