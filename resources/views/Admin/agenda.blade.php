@extends('layouts.sistema')
    @section('content')
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-7">
                  <h1>Agenda</h1>
              </div>     
              <!--Formulário de cadastro de contatos (Agenda interna de funcionários)-->
              <div class="float-right">
                <form action="/cadastrar/contato" method="POST">       
                  @csrf                 
                  <div class="form-row align-items-center">
                    <div class="col-sm-5">
                      <label class="sr-only" for="inlineFormInput">Nome</label>
                      <input type="text" class="form-control mb-1" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="col-sm-4">
                      <label class="sr-only" for="inlineFormInputGroup">Telefone</label>
                      <div class="input-group mb-1">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Tel</div>
                        </div>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(81) 99999-9999" required>
                      </div>
                    </div>                          
                    <div class="col-auto">
                      <button type="submit" class="btn btn-success mb-1">
                      <span class="oi oi-task"></span> Cadastrar
                      </button>
                    </div>
                  </div>
                </form>
              </div>                                     
            </div>                    
          </div>                                                                                       
        </section>                                  
        <section class="content-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listagem de Contatos</h3>              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">                        
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Telefone</th>   
                    <th>Data do Cadastro</th>     

                    <th class="text-center">Ação</th>                                                         
                  </tr>
                </thead>
                <tbody>
                  @foreach($agendas as $agenda)
                    <tr>                                
                      <td>{{$agenda->nome}}</td>                                                             
                      <td>{{$agenda->telefone}}</td>    
                      <td>{{date("d/m/Y H:i:s", strtotime ($agenda->created_at)) }}</td>   

                      <td class="text-center"> 

                      <!--Botão Editar-->    
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"                                                                                               
                          data-nome="{{$agenda->nome}}"                                                    
                          data-telefone="{{$agenda->telefone}}"  
                          data-id="{{$agenda->id}}">             
                          <span class="oi oi-pencil"></span>                                            
                      </button>
                    
                      <!--Botão Deletar-->                                                                                          
                      <a href="deletar/contato/{{$agenda->id}}" class="btn btn-danger btn-sm" onClick="return confirm('DESEJA REALMENTE DELETAR ESTE CONTATO?')">
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

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Contato</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="Editarcontato" method="POST">       
                @csrf                 
                <div class="form-row align-items-center">
                  <div class="col-sm-5">
                    <label class="sr-only" for="inlineFormInput">Nome</label>
                    <input type="text" class="form-control mb-1" name="nome" id="nome" placeholder="Nome" required>
                  </div>
                  <div class="col-sm-7">
                    <label class="sr-only" for="inlineFormInputGroup">Telefone</label>
                    <div class="input-group mb-1">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Tel</div>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(81) 99999-9999" required>
                      </div>                     
                    </div>
                  </div>                                            
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              
                  <button type="submit" class="btn btn-success mb-1">
                    <span class="oi oi-task"></span> Salvar mudanças
                  </button>              
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

      <!--START SCRIPT-->
      

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
          $('#exampleModal').on('show.bs.modal', function (event)
              {
                  var button = $(event.relatedTarget)
                  var recipient = button.data('whatever')
                  var nome = button.data('nome')
                  var telefone = button.data('telefone')                    
                  var id = button.data('id')

                  var modal = $(this)
                  modal.find('.modal-body input').val(recipient)

                  modal.find('#nome').val(nome)
                  modal.find('#telefone').val(telefone)                       
                  modal.find('#id').val(id)

              })
          $(document).ready(function()
          {
              $('#example').DataTable();
          });            

      </script>
    @endsection
@endsection