<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\congregacoes;
use App\congregacao;

class CongregacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $congregacoes = congregacoes::all();
        $congregacao = congregacoes::get();

        return view('Admin.congregacoes', compact('congregacoes', 'congregacao'));
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
        $congregacoes = new congregacoes();
        $congregacoes->congregacao = $request->congregacao;        
        $congregacoes->save();

        //Mensagem cadastrar         
        flash('Congregação cadastrado com sucesso!')->success()->important();

        return redirect('congregacao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $congregacoes = congregacoes::find($request->$id);
        $congregacoes->congregacao = $request->congregacao;      
        dd($congregacoes) ;
        $congregacoes->save();

        //Mensagem atualizar
        flash('Novo contato cadastrado com sucesso!')->warning()->important();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $congregacoes = congregacoes::find($request->id);
        $congregacoes->delete();

        //Mensagem cadastrar
        flash('Congregação excluida com sucesso!')->error()->important();

        return redirect ('congregacao');

    }
}
