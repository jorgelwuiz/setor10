<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function()
    {
        return view('auth.login');
    });

Route::group(['middleware' => 'auth'], function (){

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/contatos', 'ContatosController@index');
    Route::get('/eventos', 'EventosController@index');
    Route::get('/listagem', 'ListagemController@index');
    Route::post('/auth/logout', 'Auth\AuthController@logout');
    
    Route::get('/cadastro-geral-usuario', 'CadastrosController@index');
    Route::get('deletar/cadastro/geral/{id}','CadastrosController@destroy');
    Route::get('editar/cadastro/geral/', 'CadastrosController@indexEditar');
    Route::post('editar/cadastro/geral/{id}','CadastrosController@update');


    Route::get('/chamadas/congresso-de-mulheres', 'CadastrosController@indexMulheres')->name('presencas.mulheres.confirmar');
    Route::post('confirmarpresenca', 'presencasController@store');

    //Metodo create, cadastrar, atualiza e deletar.
    Route::get('/cadastrar-usuario', 'CadastrosController@create');
    Route::post('/cadastrar/pessoa', 'CadastrosController@store');


});


