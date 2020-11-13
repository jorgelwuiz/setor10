@extends('layouts.sistema')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Listagem Geral</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">                                               
                      <li class="breadcrumb-item active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                                                 
                          <a  class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="fa fa-arrow-circle-down "></i> Sair
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                              @csrf
                          </form>                                                  
                      </li>                                                                                                    
                    </ol>                          
                  <div>                        
                </div>                    
              </div>                                                                                       
            </section>                                  
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastros Gerais</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">                        
                          <thead>
                            <tr>
                              <th>Area</th>
                              <th>Congregação</th>
                              <th>Nome</th>
                              <th>Cartão de Membro</th>
                              <th>Função</th>
                              <th>Contato</th>
                              <th class="text-center">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($cadastros as $cadastro)
                              <tr>
                                <td>{{$cadastro->area_id }}</td>
                                <td>{{$cadastro->congregacao_id}}</td>
                                <td>{{$cadastro->nome}}</td>
                                <td>{{$cadastro->numero_cartao_membro}}</td>
                                <td>{{$cadastro->funcao_eclesiastica_id}}</td>                                
                                <td>{{$cadastro->contato}}</td>

                                <td class="text-center">    
                                <button type="button" class="btn btn-primary btn-sm">Exibir
                                </button>                     
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
