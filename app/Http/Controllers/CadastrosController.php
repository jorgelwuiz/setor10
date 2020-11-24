<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\funcao_eclesiasticas;
use App\Models\cadastro_pessoas;
use App\cadastros;
use App\Models\areas;

use App\Models\eventos;
use App\Models\congregacoes;


class CadastrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Index chamada Doutrina     
    public function index()
    {
        $cadastros = cadastro_pessoas::all();        
        $congregacoes = congregacoes::all();
        $funcao_eclesiasticas = funcao_eclesiasticas::all();
        $areas = areas::all();
        $eventos = eventos::all();

        return view('Admin/CadastroGeral', compact('cadastros','congregacoes','areas','funcao_eclesiasticas','eventos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $areas = areas::all();
        $congregacoes =  db::table('congregacoes')->orderBy('congregacao')->get();
        $funcao_eclesiasticas = db::table('funcao_eclesiasticas')->orderBy('funcao_eclesiastica')->get();        
        $eventos = eventos::all();

        return view('Admin.create',compact('areas','congregacoes','funcao_eclesiasticas','eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastros = new cadastro_pessoas();
        $cadastros->area_id = $request->area_id;
        $cadastros->congregacao_id = $request->congregacao_id;
        $cadastros->funcao_eclesiastica_id = $request->funcao_eclesiastica_id;
        $cadastros->nome = $request->nome;
        $cadastros->contato = $request->contato;        
        $cadastros->email = $request->email;
        $cadastros->numero_cartao_membro = $request->numero_cartao_membro;      
        $cadastros->endereco = $request->endereco ;        
        $cadastros->numero = $request->numero;        
        $cadastros->status = $request->status;        
        $cadastros->observacoes = $request->observacoes;           
        dd($cadastros);
        $cadastros->save();
        

        return redirect('cadastro-geral-usuario');
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
        $cadastros = cadastro_pessoas::find($request->id);                    
        $cadastros->area_id = $request->area_id;
        $cadastros->congregacao_id = $request->congregacao_id;
        $cadastros->funcao_eclesiastica_id = $request->funcao_eclesiastica_id;
        $cadastros->nome = $request->nome;
        $cadastros->contato = $request->contato;        
        $cadastros->email = $request->email;
        $cadastros->numero_cartao_membro = $request->numero_cartao_membro;      
        $cadastros->endereco = $request->endereco ;        
        $cadastros->numero = $request->numero;        
        $cadastros->status = $request->status;        
        $cadastros->observacoes = $request->observacoes;                  
        $cadastros->save();
        
        return redirect('cadastro-geral-usuario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cadastros = cadastro_pessoas::find($request->id);                    
        $cadastros->delete();

        return redirect('cadastro-geral-usuario');
        
    }
   
}
