<html lang="pt">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

    <title>Info-Med</title>
    <link href="{{ asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	
    </head>
    <body>

            <header class="logo">
                <img src="{{asset('imagens/golfarma.png')}}">
            </header>
    <!-- Latest compiled JavaScript -->
            <section>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                
                
            <div class="container-fluid">
                          <div class="card shadow mb-4">
                          <a class="btn btn-success" href="{{ url('/novo') }}" style="height:30px; font-size: 13px; width:100px; margin: 15px;">Adicionar <i class="fas fa-plus"></i></a>

                          <div class="card-body" style="padding: 0">
                              
                          <!-- painel tabela -->
                          <div class="table-responsive">
                               <table class="table table-striped" width="100%" cellspacing="0" style="text-align: center">
                              <thead  class="thead-dark">
                                <tr>
                                  <th>Informações sobre os médicos cadastrados</th>

                                </tr>
                                   </thead></table>
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                              <thead  class="thead-dark">
                                <tr>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                <th></th>
                                  <th style="width: 210px;"></th>
                                </tr>
                              </thead>
                              <tfoot  class="thead-dark">
                                <tr>
                                    <th>Nome</th>
                                  <th>CRM</th>
                                  <th>telefone</th>
                                 <th>especialidades</th>

                                  <th style="width: 210px;">Ações</th>
                                </tr>
                              </tfoot>
                              <tbody>


                             @foreach($medicos as $medico)
                                    <tr>
                                        <td>{{ $medico->nome }}</td>
                                        <td>{{ $medico->crm }}</td>
                                        <td>{{ $medico->telefone }}</td>
                                        <td>@foreach($especialidades as $especialidade)
                                        @if ($medico->crm == $especialidade->crm)
                                            {{ $especialidade->nome }}<br>   
                                        @endif

                            @endforeach </td>
                                         <th  style="width: 210px;">
                                             <a  href="{{ route('procurarMedico', ['crm' => $medico->crm]) }}" class="btn btn-primary" style="height:30px; font-size: 13px; margin: 1px; width: 80px; float: left; ">Editar <i class="far fa-edit"></i></a>
                                             <a  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $medico->crm }}" style="height:30px; font-size: 13px; margin: 1px; width: 80px; float: left; color: white; ">Excluir <i class="far fa-trash-alt"></i>
                                             </a>
                                        </th>
                                  </tr>


                                                      <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $medico->crm }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deletar Médico</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                       Deletar {{ $medico->nome }} do Sistema?

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                       <a type="button" class="btn btn-danger" href="{{ route('deletarMedico', ['crm' => $medico->crm]) }}" class="btn btn-danger btn-xs">Confirmar</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                               @endforeach





                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>







                </div>
        <!-- Bootstrap core JavaScript-->
        </section>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/paginacao.css')}}">
        <script type="text/javascript" src="{{ asset('js/paginacao.js')}}"></script>

                            <script>
                                $(document).ready(function() {
                                    $('#dataTable').dataTable();
                                });
                            </script>
        </body>
</html>