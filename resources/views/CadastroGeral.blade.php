@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="pt-Br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  </head>
<body>    
   <div class="container pt-5">                        
        <div class="modal-header">
            <h2 class="modal-title">            
                <span aria-hidden="true" class="icon-note"></span>
                Cadastrar Usuário
                <a href="/cadastrar" class="btn btn-success btn-lg">Cadastrar</a>
            </h2>        
        </div>        
    </div>
    <div class="container pt-5">    
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
        </div>  
        <div class="table-responsive">
            <div class="portlet-body">
                <div class="table-container">
                    <table id="tabela" class="table table-hover">
                        <thead class="thead-dark">
                            <tr>                                                                                                      
                                <th>Área</th>
                                <th>Congregação</th> 
                                <th>Nome</th> 
                                <th>Função</th> 
                                <th>Cartão</th> 
                                <th>Data de Cadastro</th> 
                                <th class="text-center">Ação</th>                                               
                            </tr>
                        </thead>
                        <tbody>                        
                            @foreach($cadastros as $item)
                                <tr>                                         
                                    <td>{{ $item->area_id }}</td>     
                                    <td>{{ $item->congregacao_id }}</td>      
                                    <td>{{ $item->nome }}</td>  
                                    <td>{{ $item->funcao_eclesiastica_id }}</td>  
                                    <td>{{ $item->numero_cartao_membro }}</td>                                                                            
                                    <td>{{date("d/m/Y H:i:s", strtotime($item->updated_at)) }}</td>  
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalSimple"    
                                                              
                                            data-informacoes="{{$item->informacoes}}"                                                        
                                            data-id="{{$item->id}}">
                                            Editar
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-brush-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
                                            </svg>
                                        </button>                           
                                        </a>  

                                        <a href="/deletar/cadastro/geral/{{$item->id}}"class= "btn btn-danger btn-sm" onClick="return confirm('DESEJA REALMENTE DELETAR O CADASTRO?')">
                                        Apagar
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                            </svg>
                                        </a>  

                                        
                                                                                                                                          
                                    </td>                                                                                                            
                                </tr>
                            @endforeach                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- START MODAL CADASTRAR CLASSE -->
    <div class="portlet-body">
            <div class="table-container">
                <div class="portlet">
                    <div class="portlet-body form">                                                                
                        <div class="modal fade" id="exampleModalSimple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCad" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalCad">
                                            {{-- <i class="fa fa-home"></i> --}}
                                            <span aria-hidden="true" class="icon-note"></span>

                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                            Editar Cadastro
                                        </h2>
                                    </div>
                                    <form action="editar/cadastro/geral" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-sm-2">                                                
                                                    <label for="area">Área</label>                                                
                                                    <input type="text" name="area_id" class="form-control" id="area_id" aria-describedby="area_id" placeholder="Ex: 1" >                                                                                                             
                                                </div>    
                                                <div class="form-group col-sm-6">
                                                    <label for="congregacao">Congregação</label>
                                                    <input type="text" name="congregacao_id" class="form-control" id="congregacao_id" aria-describedby="congregacao" placeholder="Ex: Matriz" >                                                                                                           
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="funcao">Função Eclesiastica</label>
                                                    <input type="text" name="funcao_esclesiastica_id" class="form-control" id="funcao_esclesiastica_id" aria-describedby="nome" placeholder="Ex: Presbítero" >                                                                                                            
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label for="nome">Nome</label>
                                                    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite o nome completo" >
                                                </div>      
                                                <div class="form-group col-sm-4">
                                                    <label for="cartao">Cartão</label>
                                                    <input type="text" name="numero_cartao_membro" class="form-control" id="numero_cartao_membro" aria-describedby="nome" placeholder="Digite o cartão de membro" >
                                                </div>                                                               
                                                <div class="form-group col-sm-4">
                                                    <label for="evento">Grupo (Doutrina)</label>
                                                    <input type="text" name="eventos_id" class="form-control" id="eventos_id" aria-describedby="eventos_id" placeholder="Digite o Grupo" >                                                                                                            
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="evento">Grupo (Mulheres)</label>
                                                    <input type="text" name="eventos_id" class="form-control" id="eventos_id" aria-describedby="eventos_id" placeholder="Digite o Grupo" >                                                    
                                                </div>                                                                                               
                                            </div>
                                        </div>                                    
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-lg">Atualizar Cadastro</button>
                                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Sair</button>
                                        </div>                                                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL CADASTRAR CLASSE-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
</body>
<!-- Optional JavaScript -->
    <script>
            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        
            $(document).ready(function()
            {
                $('#example').DataTable();
            });
    </script>

    <!--START SCRIPT-->
    <script>
                $('#exampleModalSimple').on('show.bs.modal', function (event)
                    {
                        var button = $(event.relatedTarget)
                        var recipient = button.data('whatever')                
                        var nome = button.data('informacoes')                
                        var id = button.data('id')

                        var modal = $(this)
                        modal.find('.modal-body input').val(recipient)

                        modal.find('#informacoes').val(nome)
                        modal.find('#id').val(id)})
                
            </script>


</html>


@endsection
