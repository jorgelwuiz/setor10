@extends('layouts.sistema')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Cadastrar Usuário</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">                                               
                      <li class="breadcrumb-item active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                                                 
                          <a  class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="fa fa-arrow-circle-down "></i> Sair
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                              @csrf
                          </form>                                                  
                      </li>                                                                                                    
                    </ol>                          
                  <div>                        
                </div>                    
              </div>                                                                                       
            </section>        
            <div class="container">  
                <div class="portlet-body">
                    <div class="table-container">
                        <div class="portlet">
                            <div class="portlet-body form">                                                                                        
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalCad">
                                            {{-- <i class="fa fa-home"></i> --}}
                                            <span aria-hidden="true" class="icon-note"></span>
                                                Formulário de Cadastro
                                        </h3>
                                    </div>
                                    <form action="/cadastrar/pessoa" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-sm-2">                                                
                                                    <label for="area">Área</label>                                                
                                                    <select type="text" name="area" class="form-control" id="area" aria-describedby="area" placeholder="Ex: 1" required>  
                                                        <option value="">Área</option>
                                                            @foreach($areas as $item)                                              
                                                                <option value="{{$item->area}}">{{$item->area}}</option>
                                                            @endforeach      
                                                    </select>                                                   
                                                </div>    
                                                <div class="form-group col-sm-6">
                                                    <label for="congregacao">Congregação</label>
                                                    <select type="text" name="congregacao" class="form-control" id="congregacao" aria-describedby="congregacao" placeholder="Ex: Matriz" required>   
                                                        <option value="">Selecione a congregação</option>
                                                            @foreach($congregacoes as $item)                                              
                                                                <option value="{{$item->congregacao}}">{{$item->congregacao}}</option>
                                                            @endforeach      
                                                    </select>                                                
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="funcao">Função Eclesiastica</label>
                                                    <select type="text" name="funcao_eclesiastica" class="form-control" id="funcao_eclesiastica" aria-describedby="nome" placeholder="Ex: Presbítero" >                                                                                                            
                                                            <option value="">Selecione a Função</option>
                                                            @foreach ($funcao_eclesiasticas as $funcao)
                                                                <option value="{{$funcao->funcao_eclesiastica}}">{{$funcao->funcao_eclesiastica}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label for="nome">Nome</label>
                                                    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite o nome completo" required>
                                                </div>        
                                                <div class="form-group col-sm-4">
                                                    <label for="cartao">Cartão</label>
                                                    <input type="text" name="numero_cartao_membro" class="form-control" id="numero_cartao_membro" aria-describedby="nome" placeholder="Digite o cartão de membro">
                                                </div>                                                                                                                                                                                                                                               
                                            </div>      

                                            <!--Checkbox de grupos-->                                                                                  
                                            <div class="container">
                                                <div>
                                                    <h2>Grupos</h2>
                                                </div><p></p>                                                  
                                                <div class="container">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;DOUTRINA
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                   
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;MULHERES
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                 
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;JOVENS
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox"  name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;ADOLESCENTES
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox"  name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;FAMÍLIA
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;COI
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="evento" id="evento_id" aria-describedby="evento_id" value="evento_id" >&nbsp;COA
                                                    </label>
                                                </div>                                                                                                                                                                                        
                                            </div>                                                                                                                         
                                        </div>                                        
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-sm ">
                                                <i class="nav-icon fas fa-check"></i>
                                                Salvar
                                            </button>     
                                            <button type="submit" class="btn btn-danger btn-sm ">
                                                <i class="nav-icon fas fa-mail-reply-all (alias)"></i>
                                                Voltar
                                            </button>                                         
                                        </div>                                                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>        
   @endsection