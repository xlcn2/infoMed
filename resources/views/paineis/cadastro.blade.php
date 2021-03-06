@extends('layouts.template')
   

@section('content')
<div class="container-fluid">
    
    

 
            
<div class="pageheader">
    <div class="pageicon"><span class="iconfa-cog"></span></div>
    <div class="pagetitle">
       
        <h3>Cadastrar Médico</h3>
    </div>
</div>



<div class="border">
    <h4 class="widgettitle">&nbsp;</h4>
    <div class="widgetcontent">
       
        <form id="formCad" method="post"  action="{{ route('adicionarMedico') }}" role="form">
                        
            {{ csrf_field() }}
           
            <div class="form-group col-md-6">
                <label>Nome</label><br>
                <input type="text" name="nome" class="form-control input-default"   required>
            </div>


            <div class="form-group col-md-6">
                <label>CRM</label><br>
                <input type="number" name="crm" class="form-control input-default" required >
            </div>

            <div class="form-group col-md-6">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control input-default" required>
            </div>
            
              
         
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
               
            <label style="margin: 10px">Selecione ao menos duas especialidades</label>
            <div class="row col-md-6" style="margin: 10px">
            
                <div>
                    <select id="leftValues" class="form-group input-default select-inline" multiple="multiple" size="10">
                                <option  value="ALERGOLOGIA">ALERGOLOGIA</option>
                                <option  value="ANGIOLOGIA">ANGIOLOGIA</option>
                                <option  value="BUCO MAXILO">BUCO MAXILO</option>
                                <option  value="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</option>
                                <option  value="CIRURGIA DE CABEÇA/PESCOÇO">CIRURGIA DE CABEÇA/PESCOÇO</option>
                                <option  value="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</option>
                                <option  value="CIRURGIA DE TORAX">CIRURGIA DE TORAX</option>
                                <option  value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                                <option  value="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</option>
                                <option  value="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</option>
                                <option  value="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</option>
                                <option  value="CIRURGIA VASCULAR">CIRURGIA VASCULAR</option>
                                <option  value="CLINICA MEDICA">CLINICA MEDICA</option>
                              <option value="CARDIOLOGIA CLINICA">CARDIOLOGIA CLINICA</option>
                    </select>
                <div>
                    <input type="text" id="txtRight" />
                </div>
                    
                </div>
                <div style="margin: 4px">
                    <input type="button" id="btnRight" value="Selecionar" />
                    <input type="button" id="btnLeft" value="Remover" />    
                </div>         
                 <div>
                    <select id="rightValues"  name="especialidades[]"  class="form-control input-default select-inline" multiple="multiple" size="10"></select>
                </div>
                 
          </div>
            <br>
          
            
            <div class="form-group col-md-11">
                <button id="send" type="submit" class="btn btn-success" onclick="validate()" >Salvar</button>
                <a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>
            </div>
            
          
            
        </form>
    </div>
</div>
<br><br>


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
    
function validate(){
    if($('#rightValues option').length<2){
        alert('Selecione ao menos duas especialidades!');
        return false;
    }
}
    
    
    
 
</script>



</div>

@endsection

      