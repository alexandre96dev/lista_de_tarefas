<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    public $table = 'tarefas';

    protected $fillable = [
        'titulo',
        'resolvido'
    ];
}
