@extends('layouts.sistema')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1><b></b></h1>
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
                                                <b>Formulário</b>
                                        </h3>
                                    </div>
                                    <form action="/cadastrar/congregacao" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-sm-12">                                                
                                                    <label for="area">Congregação</label>                                                
                                                    <input type="text" name="congregacao" class="form-control" id="congregacao" aria-describedby="congregacao" placeholder="Digite a Congregação" required>                                                                                                         
                                                </div>                                                                                                                                                                                                                                                                                                 
                                            </div>                                                                                                                                                                          
                                        </div>                                        
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-sm ">
                                                <span class="oi oi-task"></span>
                                                Salvar
                                            </button>     
                                            <a href="/dashboard" class="btn btn-danger btn-sm ">
                                                <span class="oi oi-action-undo"></span>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>                                          
                    </div>                    
                </div>                                                                                       
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Listagem Geral de Congregações</b></h3>
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
                                            <a href="deletar/congregacao/{{$congregacao->id}}" class="btn btn-danger btn-sm" onClick="return confirm('DESEJA REALMENTE DELETAR ESTE USUÁRIO?')">
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