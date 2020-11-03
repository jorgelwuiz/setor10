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
                                <form action="editar/cadastro/geral" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-sm-2">
                                                <input type="text" name="idArea" id="idArea" hidden>
                                                <label for="area">Área</label>                                                
                                                <input type="text" name="area_id" class="form-control" id="area_id" aria-describedby="area_id" placeholder="Digite aqui o número da Área!" >                                                    
                                            </div>    
                                            <div class="form-group col-sm-4">
                                                <label for="congregacao">Congregação</label>
                                                <input type="text" name="congregacao_id" class="form-control" id="congregacao_id" aria-describedby="congregacao" placeholder="Digite a congregação" >                                                    
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="nome">Nome</label>
                                                <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite o nome completo" >
                                            </div>                        
                                            <div class="form-group col-sm-4">
                                                <label for="funcao">Função Eclesiastica</label>
                                                <input type="text" name="funcao_esclesiastica_id" class="form-control" id="funcao_esclesiastica_id" aria-describedby="nome" placeholder="Digite a função eclesiástica" >                                                                                                            
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="evento">Grupo</label>
                                                <input type="text" name="eventos_id" class="form-control" id="eventos_id" aria-describedby="eventos_id" placeholder="Digite o Grupo" >
                                                    
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="cartao">Cartão</label>
                                                <input type="text" name="numero_cartao_membro" class="form-control" id="numero_cartao_membro" aria-describedby="nome" placeholder="Digite o cartão de membro" >
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-lg">Savar</button>
                                        <a href="/cadastro/geral/" class="btn btn-danger btn-lg">Voltar</a>
                                    </div>                                                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>        
    </body>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
<html>