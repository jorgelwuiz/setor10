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
                    <a href="/cadastrar" class="btn btn-success btn-lg  " >Cadastrar</a>
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
                                        <td>{{ $item->numero_cartao_membro }}</td>                                                                            
                                        <td>{{date("d/m/Y H:i:s", strtotime($item->updated_at)) }}</td>  
                                        <td class="text-center">
                                            <a href="deletar/cadastro/{{$item->id}}"class= "btn btn-danger btn-sm" onClick="return confirm('DESEJA REALMENTE DELETAR O CADASTRO?')">Apagar</a>                                                        
                                        </td>
                                    </tr>
                                @endforeach                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
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
</html>

@endsection
