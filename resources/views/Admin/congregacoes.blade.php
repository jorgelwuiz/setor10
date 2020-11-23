@extends('layouts.sistema')
    @section('content')
    <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-7">
                    <h1>Congregação</h1>
                </div> 
                <!--Formulário de cadastro de contatos (Agenda interna de funcionários)-->
                <div class="float-right">
                    <form action="/cadastrar/congregacao" method="POST">  
                        @csrf                 
                        <div class="form-row align-items-center">
                            <div class="col-sm-8">
                                <label class="sr-only" for="inlineFormInput">Nome</label>
                                <input type="text" name="congregacao" class="form-control" id="congregacao" aria-describedby="congregacao" placeholder="Digite a Congregação!" required>
                            </div>                                              
                            <div class="col-auto">
                                <button type="submit" class="btn btn-success mb-1">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>                                        
            </div>                                                                                                                      
            </section>                                 
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Listagem de Congregações</b></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">                        
                            <thead>
                                <tr>
                                    <th>Nome</th>    
                                    <th>Data do Cadastro</th>                              
                                    <th class="text-center">Ação</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($congregacoes as $congregacao)
                                    <tr>
                                        <td>{{$congregacao->congregacao }}</td>    
                                        <td>{{$congregacao->created_at }}</td>                                                            

                                        <td class="text-center">    
                                            
                                            <!--Botão Editar-->    
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"                                                                                               
                                                data-congregacao="{{$congregacao->congregacao}}"                                                    
                                                data-id="{{$congregacao->id}}">             
                                                <span class="oi oi-pencil"></span>                                            
                                            </button>

                                            <!--Botão Deletar-->                                                                                          
                                            <a href="deletar/congregacao/{{$congregacao->id}}" class="btn btn-danger btn-sm" onClick="return confirm('DESEJA REALMENTE DELETAR A CONGREGAÇÃO?')">
                                                <span class="oi oi-trash"></span>
                                            </a>                                     
                                        </td>                                                                               
                                    </tr>
                                @endforeach                                                              
                            </tbody>                          
                        </table>
                    </div>
                </div>                
            </section> 
        </div>  
    </div>   

    @section('scripts')
        <script>
            $(function () {
                $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                });
                $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                });
            });
        </script>
    @endsection
@endsection