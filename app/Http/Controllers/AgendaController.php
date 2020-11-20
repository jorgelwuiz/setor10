<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendas;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = agendas::all();

        return view('Admin.agenda', compact('agendas'));
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
        $agendas = new agendas();
        $agendas->nome = $request->nome;
        $agendas->telefone = $request->telefone;        
        $agendas->save();

        return redirect ('/agenda');

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
        $agendas = agendas::find($request->id);

        $agendas->nome = $request->nome;
        $agendas->telefone = $request->telefone;        
        $agendas->save();

        return redirect ('/agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $agendas = agendas::find($request->id);
        $agendas->delete();
        
        return redirect ('/agenda');
    }
}
