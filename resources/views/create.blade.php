
<!doctype html>
<html lang="pt-Br">    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>        
  </head>
    <body>        
        <div class="container pt-5">  
            <div class="portlet-body">
                <div class="table-container">
                    <div class="portlet">
                        <div class="portlet-body form">                                                                                        
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalCad">
                                        {{-- <i class="fa fa-home"></i> --}}
                                        <span aria-hidden="true" class="icon-note"></span>
                                            Cadastrar Área
                                    </h2>
                                </div>
                                <form action="/cadastrar/pessoa" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-sm-2">                                                
                                                <label for="area">Área</label>                                                
                                                <select type="text" name="area_id" class="form-control" id="area_id" aria-describedby="area_id" placeholder="Ex: 1" >  
                                                    <option value="">Área</option>
                                                        @foreach($areas as $item)                                              
                                                            <option value="{{$item->area_id}}">{{$item->area_id}}</option>
                                                        @endforeach      
                                                </select>                                                   
                                            </div>    
                                            <div class="form-group col-sm-6">
                                                <label for="congregacao">Congregação</label>
                                                <select type="text" name="congregacao_id" class="form-control" id="congregacao_id" aria-describedby="congregacao" placeholder="Ex: Matriz" >   
                                                    <option value="">Selecione a congregação</option>
                                                        @foreach($congregacoes as $item)                                              
                                                            <option value="{{$item->congregacao_id}}">{{$item->congregacao_id}}</option>
                                                        @endforeach      
                                                </select>                                                
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="funcao">Função Eclesiastica</label>
                                                <select type="text" name="funcao_eclesiastica_id" class="form-control" id="funcao_eclesiastica_id" aria-describedby="nome" placeholder="Ex: Presbítero" >                                                                                                            
                                                        <option value="">Selecione a Função</option>
                                                        @foreach ($funcao_eclesiasticas as $funcao)
                                                            <option value="{{$funcao->funcao_eclesiastica_id}}">{{$funcao->funcao_eclesiastica_id}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-8">
                                                <label for="nome">Nome</label>
                                                <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite o nome completo" >
                                            </div>        
                                            <div class="form-group col-sm-4">
                                                <label for="cartao">Cartão</label>
                                                <input type="text" name="numero_cartao_membro" class="form-control" id="numero_cartao_membro" aria-describedby="nome" placeholder="Digite o cartão de membro" >
                                            </div>                                                                                                                                                                                                                                               
                                        </div>      

                                        <!--Checkbox de grupos-->                                                                                  
                                        <div class="container">
                                            <div>
                                                <h2>Grupos</h2>
                                            </div><p></p>                                                  
                                            <div class="container">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;DOUTRINA
                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                   
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;MULHERES
                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                 
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;JOVENS
                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                <label class="checkbox-inline">
                                                    <input type="checkbox"  name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;ADOLESCENTES
                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                <label class="checkbox-inline">
                                                    <input type="checkbox"  name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;FAMÍLIA
                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;COI
                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="evento_id" id="evento_id" aria-describedby="evento_id" value="evento_id">&nbsp;COA
                                                </label>
                                            </div>                                                                                                                                                                                        
                                        </div>                                                                                                                         
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-lg ">Savar</button>
                                        <a href="cadastro-geral-usuario" class="btn btn-danger btn-lg">Voltar</a>
                                    </div>                                                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>        
    </body>    
   
<html>