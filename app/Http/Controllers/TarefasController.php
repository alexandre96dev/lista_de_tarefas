<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
class TarefasController extends Controller
{
    public function index(Type $var = null)
    {
        $data = Tarefa::all();
        return view('listagem', ['data' => $data]);
    }
    public function adicionar(Request)
    {
        # code...
    }
}
