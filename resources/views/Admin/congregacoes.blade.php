@extends('layouts.sistema')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-7">
                        <h1>Congregações</h1>
                    </div>    
                    <div class="actions">                                                                                                                
                        <div class="btn-group">                  
                            <a class="btn btn-success btn-sm" href="javascript:;" data-toggle="modal" data-target="#exampleModalCongregacao">                                                                                        
                                <span class="fas fa-edit "></span> Cadastrar Congregacao                                                                                               
                            </a>                   
                        </div>                              
                    </div>                         
                </div>
            </div>
            <!--Formulário de cadastro de contatos (Agenda interna de funcionários)-->
            <div class="modal fade" id="exampleModalCongregacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">                  
                        <i class="fas fa-save"></i> Nova Congregação
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                        <div class="modal-body">
                            <form action="/cadastrar/congregacao" method="POST">  
                                @csrf                 
                                <div class="form-row align-items-center">
                                    <div class="col-sm-10">
                                        <label class="sr-only" for="inlineFormInput">Nome</label>
                                        <input type="text" name="congregacao" class="form-control" id="congregacao" aria-describedby="congregacao" placeholder="Digite a Congregação!" required>
                                    </div>                                                                                                                                       
                                </div>              
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Fechar
                                    </button>          
                                    <button type="submit" class="btn btn-success mb-1">
                                        <span class="oi oi-task"></span> Salvar
                                    </button>              
                                </div>
                            </form>
                        </div>            
                     </div>
                </div>
            </div>                                                                                                     
            </section> 
            <div class="container">
                <!-- ALERTA MENSAGEM -->
                    @include('flash::message')
                <!-- ALERTA MENSAGEM -->          
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
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLabelEdit"                                                                                               
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
            <!--Formulário de cadastro de contatos (Agenda interna de funcionários)-->
            <div class="modal fade" id="exampleModalLabelEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditarCongregacao" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalEditarCongregacao">                  
                        <i class="fas fa-save"></i> Nova Congregação
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                        <div class="modal-body">
                            <form action="{{ route ('editar.congregacao')}}" method="PUT">  
                                @csrf                 
                                <div class="form-row align-items-center">
                                    <div class="col-sm-10">
                                        <label class="sr-only" for="inlineFormInput">Nome</label>
                                        <input type="text" name="congregacao" class="form-control" id="congregacao" aria-describedby="congregacao" placeholder="Digite a Congregação!" required>
                                    </div>                                                                                                                                       
                                </div>              
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Fechar
                                    </button>          
                                    <button type="submit" class="btn btn-success mb-1">
                                        <span class="oi oi-task"></span> Salvar
                                    </button>              
                                </div>
                            </form>
                        </div>            
                     </div>
                </div>
            </div>
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

        <script>
            $('#exampleModalLabelEdit').on('show.bs.modal', function (event)
            {
                var button = $(event.relatedTarget)
                var recipient = button.data('whatever')
                var nome = button.data('congregacao')                                 
                var id = button.data('id')

                var modal = $(this)
                modal.find('.modal-body input').val(recipient)

                modal.find('#congregacao').val(nome)                                    
                modal.find('#id').val(id)
            }) 

        </script>
    @endsection
@endsection