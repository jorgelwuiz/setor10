@extends('layouts.sistema')
    @section('content')
    <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Agenda</h1>
                  </div>                                          
                </div>                    
              </div>                                                                                       
            </section>                                  
            <section class="content">
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
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($contatos as $contato)
                              <tr>                                
                                <td>{{$contato->nome}}</td>                                                             
                                <td>{{$contato->contato}}</td>    
                                <td>{{date("d/m/Y H:i:s", strtotime ($contato->created_at)) }}</td>                                                                        
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