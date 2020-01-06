<html lang="pt">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GolFarma</title>
    </head>
    <body>
<link href="{{ asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>







<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
<header class="logo">
    <img src="{{asset('imagens/golfarma.png')}}">
    </header>
     
<div class="container-fluid">
    
    
    

<div class="pageheader">
    <div class="pageicon"><span class="iconfa-cog"></span></div>
    <div class="pagetitle">
      
        <h3>Editar informações do Medico</h3>
    </div>
</div>


<div class="border">
    <h4 class="widgettitle">&nbsp;</h4>
	<div class="widgetcontent">
  
        <form method="post" action="{{ route('atualizarMedico', ['id' => $medico->crm]) }}" onsubmit="validate()" role="form">

        	{{ csrf_field() }}

                <div class="form-group col-md-6">
                    <label>Nome</label><br>
                    <input type="text" name="nome" class="select form-control" value="{{ $medico->nome }}" required>
                </div>

                <div class="form-group col-md-6">
                    <label>CRM</label><br>
                    <input type="number" name="crm" class="select form-control" value="{{ $medico->crm }}" required>
                </div>

               
              <div class="form-group col-md-6">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control input-default" value="{{ $medico->telefone }}" required>
                </div>
            
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
               
            <label style="margin: 10px">Selecione ao menos duas especialidades</label>
            <div class="row" style="margin: 10px">
            
                <div style="float: left">
                    <select id="leftValues" class="form-group input-default select-inline" multiple="multiple" size="10">
                       
                                <option value="ALERGOLOGIA">ALERGOLOGIA</option>
                                <option value="ANGIOLOGIA">ANGIOLOGIA</option>
                                <option value="BUCO MAXILO">BUCO MAXILO</option>
                                <option value="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</option>
                                <option value="CIRURGIA DE CABEÇA/PESCOÇO">CIRURGIA DE CABEÇA/PESCOÇO</option>
                                <option value="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</option>
                                <option value="CIRURGIA DE TORAX">CIRURGIA DE TORAX</option>
                                <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                                <option value="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</option>
                                <option value="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</option>
                                <option value="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</option>
                                <option value="CIRURGIA VASCULAR">CIRURGIA VASCULAR</option>
                                <option value="CLINICA MEDICA">CLINICA MEDICA</option>
                              <option value="CARDIOLOGIA CLINICA">CARDIOLOGIA CLINICA</option>
                    </select>
                <div>
                    <input type="text" id="txtRight" />
                </div>
                    
                </div>
                <div style="margin: 4px; float: left">
                    <input type="button" id="btnRight" value="Selecionar" />
                    <input type="button" id="btnLeft" value="Remover" />    
                </div>         
                 <div style="float:left">
                    <select  id="rightValues" name="especialidades[]"  class="form-control input-default select-inline" multiple="multiple" size="10" > 
                     @foreach ($especialidades as $especialidade)
                         <option selected value="{{ $especialidade->nome }}">{{ $especialidade->nome }}</option>
                     @endforeach
                     </select>
                </div>
                 
          </div>
            <br>

            <div class="form-group col-md-11">
            	<button type="submit" class="btn btn-success">Salvar</button>
            	<a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>
        	</div>
        </form>
	</div>
</div>


<script type="text/javascript">

    
    $("#btnLeft").click(function () {
    var selectedItem = $("#rightValues option:selected");
    $("#leftValues").append(selectedItem);
});

$("#btnRight").click(function () {
    var selectedItem = $("#leftValues option:selected");
    $("#rightValues").append(selectedItem);
});

$("#leftValues").change(function () {
    var selectedItem = $("#leftValues option:selected");
    $("#txtRight").val(selectedItem.text());
});
    
  
    
</script>


    
    
</div>



        </body>