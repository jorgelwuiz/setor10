@extends('layouts.sistema')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Cadastrar Usuário</h1>
                  </div>                                        
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
                                                    <select type="text" name="area_id" class="form-control" id="area_id" aria-describedby="area" placeholder="Ex: 1" required>  
                                                        <option value="">Área</option>
                                                            @foreach($areas as $item)                                              
                                                                <option value="{{$item->area}}">{{$item->area}}</option>
                                                            @endforeach      
                                                    </select>                                                   
                                                </div>    
                                                <div class="form-group col-sm-6">
                                                    <label for="congregacao">Congregação</label>
                                                    <select type="text" name="congregacao_id" class="form-control" id="congregacao_id" aria-describedby="congregacao_id" placeholder="Ex: Matriz" required>   
                                                        <option value="">Selecione a congregação</option>
                                                            @foreach($congregacoes as $item)                                              
                                                                <option value="{{$item->congregacao}}">{{$item->congregacao}}</option>
                                                            @endforeach      
                                                    </select>                                                
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="funcao">Função Eclesiastica</label>
                                                    <select type="text" name="funcao_eclesiastica_id" class="form-control" id="funcao_eclesiastica_id" aria-describedby="nome" placeholder="Ex: Presbítero" >                                                                                                            
                                                            <option value="">Selecione a Função</option>
                                                            @foreach ($funcao_eclesiasticas as $funcao)
                                                                <option value="{{$funcao->funcao_eclesiastica}}">{{$funcao->funcao_eclesiastica}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="nome">Nome</label>
                                                    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite o nome completo" required>
                                                </div>      
                                                <div class="form-group col-sm-2">
                                                    <label for="nome">Contato</label>
                                                    <input type="text" name="contato" class="form-control" id="telefone" aria-describedby="nome" placeholder="(81) 99999-3333" required>
                                                </div>    
                                                <div class="form-group col-sm-4">
                                                    <label for="cartao">Email</label>
                                                    <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite o e-mail">
                                                </div> 
                                                <div class="form-group col-sm-2">
                                                    <label for="cartao">Cartão</label>
                                                    <input type="text" name="numero_cartao_membro" class="form-control" id="numero_cartao_membro" aria-describedby="nome" placeholder="Digite o número">
                                                </div>       
                                                <div class="form-group col-sm-6">
                                                    <label for="cartao">Endereço</label>
                                                    <input type="text" name="endereco" class="form-control" id="endereco" aria-describedby="endereco" placeholder="Digite o endereço">
                                                </div>    
                                                <div class="form-group col-sm-2">
                                                    <label for="cartao">Nº</label>
                                                    <input type="text" name="numero" class="form-control" id="numero" aria-describedby="numero" placeholder="Digite o Número">
                                                </div>      
                                                <div class="form-group col-sm-2">
                                                    <label for="status">* Status</label>
                                                    <input type="text"  maxlength="1" name="status" class="form-control" id="status" placeholder="Status ( 1 ou 0 )"required>                                            
                                                </div>     

                                                <div class="form-group col-sm-12">
                                                    <label for="observacoes" >Observações Importantes</label>
                                                    <textarea type="text" maxlength="300" name="observacoes" class="form-control" id="observacoes" rows="4"></textarea>
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
                                                <span class="oi oi-task"></span>
                                                Salvar
                                            </button>     
                                            <a href="/dashboard" class="btn btn-danger btn-sm ">
                                                <span class="fa fa-angle-double-left"></span>
                                                Voltar
                                            </a>                                         
                                        </div>                                                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>       
        
        @section('scripts')              
            <script>              
                $(document).ready(function()
                {                   
                    $('#telefone').mask('(00) 00000-0000');                                                                               
                });
            </script>     
        @endsection
   @endsection