<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    //Nome da tabela do banco de dados
    protected $table = 'professores';
    //nome dos atributos que serão enviados pelo controlador
    protected $fillable = ['nome', 'cpf', 'telefone'];
}
