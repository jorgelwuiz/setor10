<?php

namespace App\Http\Controllers;

use App\Presencas;
use App\geral_cadastros;
use App\eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PresencasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $presencas = new presencas();
        $presencas->presenca_id = $request->presenca_id;
        $presencas->evento_id = $request->evento_id;      
        $presencas->save();

        return view('presencasMulheres');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Presencas  $presencas
     * @return \Illuminate\Http\Response
     */
    public function show(Presencas $presencas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presencas  $presencas
     * @return \Illuminate\Http\Response
     */
    public function edit(Presencas $presencas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presencas  $presencas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presencas $presencas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presencas  $presencas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presencas $presencas)
    {
        //
    }
}
