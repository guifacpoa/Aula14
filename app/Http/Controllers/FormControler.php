<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovimentoModel;

class FormControler extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        MovimentoModel::create($dados);
        echo "Salvo";
    }

    public function listar()
    {
        $lista = MovimentoModel::all();
        // dd($lista);
        return view('admin/index', compact('lista'));
    }
}
