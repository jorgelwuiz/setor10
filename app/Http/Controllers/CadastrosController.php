<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\funcao_eclesiasticas;
use App\cadastro_gerais;
use App\congregacoes;
use App\cadastros;
use App\areas;
use App\eventos;


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
        $cadastros = cadastro_gerais::all();        
        $congregacoes = congregacoes::all();
        $funcao_eclesiasticas = funcao_eclesiasticas::all();
        $areas = areas::all();
        $eventos = eventos::all();

        return view('Admin//CadastroGeral', compact('cadastros','congregacoes','areas','funcao_eclesiasticas','eventos'));
    }

    //Index chamada Mulheres     
    public function indexMulheres()
    {
        $cadastros = db::table('geral_cadastros')                                                        
                        ->where('evento_1_id','=','2')
                        ->orderBy('area_id')
                        ->get();    

        $congregacoes = congregacoes::all();        
        $areas = areas::all();
        $eventos = eventos::all();

        return view('presencasMulheres', compact('cadastros','congregacoes','areas','eventos'));
    }

    //Index Editar    
    public function indexEditar()
    {          
        $cadastros = cadastro_gerais::all();
        $congregacoes = congregacoes::all();        
        $areas = areas::all();
        $eventos = eventos::all();

        return view('/Admin/EditarCadastroGeral', compact('cadastros','congregacoes','areas','eventos'));
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
        $funcao_eclesiasticas = funcao_eclesiasticas::all();
        $eventos = eventos::all();

        return view('/Admin/create',compact('areas','congregacoes','funcao_eclesiasticas','eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastros = new cadastro_gerais();
        $cadastros->area_id = $request->idArea;
        $cadastros->congregacao_id = $request->congregacao_id;
        $cadastros->nome = $request->nome;
        $cadastros->funcao_eclesiastica_id = $request->funcao_eclesiastica_id;      
        $cadastros->evento_id = $request->evento_id;        
        $cadastros->numero_cartao_membro = $request->numero_cartao_membro;           
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
        $cadastros = geral_cadastros::find($request->id);                    
        $cadastros->area_id = $request->idArea;
        $cadastros->congregacao_id = $request->congregacao_id;
        $cadastros->nome = $request->nome;
        $cadastros->funcao_eclesiastica_id = $request->funcao_eclesiastica_id;      
        $cadastros->evento_id = $request->evento_id;        
        $cadastros->numero_cartao_membro = $request->numero_cartao_membro;                
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
        $cadastros = geral_cadastros::find($request->id);                    
        $cadastros->delete();

        return redirect('cadastro-geral-usuario');
        
    }
   
}
