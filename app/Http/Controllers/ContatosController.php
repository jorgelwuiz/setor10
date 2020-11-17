<?php

namespace App\Http\Controllers;

use App\Contatos;
use App\cadastro_gerais;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = cadastro_gerais::all()->where('funcao_eclesiastica_id', true);
                                            
        return view('/Admin/contatos',compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function show(Contatos $contatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contatos $contatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contatos $contatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contatos $contatos)
    {
        //
    }
}
