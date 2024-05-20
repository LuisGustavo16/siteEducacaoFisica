<?php

namespace App\Http\Controllers;

use App\Models\TreinoAmistoso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerTreinoAmistoso extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new TreinoAmistoso();
        $dados->idModalidade = $request->input('idModalidade');
        $dados->dia = $request->input('dia');
        $dados->horario = $request->input('horario');
        $dados->genero = $request->input('genero');
        $dados->publico = $request->input('publico');
        $dados->local = $request->input('local');
        $dados->responsavel = $request->input('responsavel');
        $dados->observacao = $request->input('observacao');
        $dados->save();
        return redirect()->route('inicio')->with('success', 'Novo Treino Cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
