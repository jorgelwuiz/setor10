@extends('layouts.sistema')
    @section('content')
    <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Eventos</h1>
                  </div>                                          
                </div>                    
              </div>                                                                                       
            </section>                                  
            <section class="content">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listagem de Eventos</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">                        
                      <thead>
                        <tr>
                          <th>Evento</th>
                          <th>Descrição do Evento</th>   
                          <th>Data do Cadastro</th>                                                                                            
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($eventos as $evento)
                          <tr>                                
                            <td>{{$evento->evento}}</td>                                                             
                            <td>{{$evento->Descricao}}</td>    
                            <td>{{date("d/m/Y H:i:s", strtotime ($evento->created_at)) }}</td>                                                                                                        
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