@extends('layouts.sistema')
  @section('content')
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cadastro Geral</h1>
            </div>                                          
          </div>                    
        </div>                                                                                       
      </section>                                  
      <section class="content">
        <div class="card">
          <div class="card-header">
              <h3 class="card-title"><b>Listagem Geral</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline table-striped">                        
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Congregação</th>
                    <th>Nome</th>
                    <th>Cartão de Membro</th>                    
                    <th>Contato</th>
                    <th>E-mail</th>
                    <th class="text-center">Detalhes</th>
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
                      <td>{{$cadastro->contato}}</td>
                      <td>{{$cadastro->email}}</td>                                

                      <td class="text-center">    
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal"                                
                          data-toggle="modal" data-target="#exampleModal"                                                                                               
                          data-area_id="{{$cadastro->area_id}}"                                                    
                          data-congregacao_id="{{$cadastro->congregacao_id}}"  
                          data-funcao_eclesiastica_id="{{$cadastro->funcao_eclesiastica_id}}"  
                          data-nome="{{$cadastro->nome}}"
                          data-contato="{{$cadastro->contato}}"  
                          data-nome="{{$cadastro->nome}}"
                          data-email="{{$cadastro->email}}"  
                          data-numero_cartao_membro="{{$cadastro->numero_cartao_membro}}"  
                          data-endereco="{{$cadastro->endereco}}"  
                          data-numero="{{$cadastro->numero}}"  
                          data-observacoes="{{$cadastro->observacoes}}"  
                          data-id="{{$cadastro->id}}">                            
                          <span class="oi oi-eye"></span>
                        </button>                                           
                      </td>
                      <td class="text-center">    
                        <button type="button" class="btn btn-success btn-sm">
                          <span class="oi oi-pencil"></span>                            
                        </button>         
                        <button type="button" class="btn btn-danger btn-sm">
                          <span class="oi oi-trash"></span>
                        </button>                                     
                      </td>                                                                         
                    </tr>
                  @endforeach                                                              
                </tbody>                          
              </table>
            </div>
          </div>
        </div>
      </section>
      <!--Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <label for="text">Informaçoes Detalhadas do Cadastro</label> 
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                                     
              <div class="row">                     
                <div class="col-sm-2">
                  <label for="area">Área</label>
                  <input type="text" class="form-control mb-1" name="area_id" id="area_id">
                </div>
                <div class="col-sm-4">
                  <label for="congregacao">Congregação</label>
                  <input type="text" class="form-control mb-1" name="congregacao_id" id="congregacao_id">
                </div>
                <div class="col-sm-4">
                  <label for="funcao">Função</label>
                  <input type="text" class="form-control mb-1" name="funcao_eclesiastica_id" id="funcao_eclesiastica_id">
                </div>
                <div class="col-sm-2">
                  <label for="funcao">Telefone</label>
                  <input type="text" class="form-control mb-1" name="contato" id="contato">
                </div>                                                      
                <div class="col-sm-8">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control mb-1" name="nome" id="nome">
                </div>  
                <div class="col-sm-4">
                  <label for="email">Email</label>
                  <input type="text" class="form-control mb-1" name="email" id="email">
                </div>                            
                <div class="col-sm-2">
                  <label for="numero">Cartão</label>
                  <input type="text" class="form-control mb-1" name="numero_cartao_membro" id="numero_cartao_membro">
                </div> 
                <div class="col-sm-8">
                  <label for="endereco">endereco</label>
                  <input type="text" class="form-control mb-1" name="endereco" id="endereco">
                </div>  
                <div class="col-sm-2">
                  <label for="numero">Número</label>
                  <input type="text" class="form-control mb-1" name="numero" id="numero">
                </div>
                <div class="form-group shadow-textarea col-sm-12">                      
                  <label for="exampleFormControlTextarea6">Observações</label>
                  <textarea id="observacoes" name="observacoes"class="form-control z-depth-2" id="exampleFormControlTextarea6" rows="3" placeholder="Este campo é destinado para informações básicas e importante para este cadastro!"></textarea>
                </div>                                                                          
              </div>              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>                                                 
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
        $('#exampleModal').on('show.bs.modal', function (event)
        {
            var button = $(event.relatedTarget)
            var recipient = button.data('whatever')
            var area_id = button.data('area_id')
            var congregacao_id = button.data('congregacao_id')      
            var funcao_eclesiastica_id = button.data('funcao_eclesiastica_id')
            var nome = button.data('nome') 
            var contato = button.data('contato') 
            var email = button.data('email') 
            var numero_cartao_membro = button.data('numero_cartao_membro') 
            var endereco = button.data('endereco') 
            var numero = button.data('numero') 
            var observacoes = button.data('observacoes')             
            var id = button.data('id')

            var modal = $(this)
            modal.find('.modal-body input').val(recipient)

            modal.find('#area_id').val(area_id)
            modal.find('#congregacao_id').val(congregacao_id)    
            modal.find('#funcao_eclesiastica_id').val(funcao_eclesiastica_id)    
            modal.find('#nome').val(nome)  
            modal.find('#contato').val(contato)     
            modal.find('#email').val(email)  
            modal.find('#numero_cartao_membro').val(numero_cartao_membro)  
            modal.find('#endereco').val(endereco)  
            modal.find('#numero').val(numero)  
            modal.find('#observacoes').val(observacoes)                         
            modal.find('#id').val(id)
        })        
      </script>
    @endsection
@endsection
