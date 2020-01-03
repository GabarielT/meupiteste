<?php

namespace App\Http\Controllers;

use App\Respostas;
use Illuminate\Http\Request;

class RespostasController extends Controller
{
    public function index()
    {
		return view('teste.teste');
    }

    public function create(Request $request)
    {
       	$resposta=new Respostas();
		$resposta->pss_nivel_satisfacao=$request->nivel;
		$resposta->pss_satisfacao=$request->satisfacao;
		$resposta->save();
		return view('welcome');
    }

    public function store(Request $request)
    {
        
    }

    public function show(Respostas $respostas)
    {
        
    }

    public function edit(Respostas $respostas)
    {
        
    }

    public function update(Request $request, Respostas $respostas)
    {
        
    }

    public function destroy(Respostas $respostas)
    {
        
    }
}
