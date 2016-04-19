<?php
require_once('controles/candidatos.php');
Processo('incluir');
?>

<!-- INÍCIO DOS REQUISITOS DO MODELO ANTIGO -->

 <script type='text/javascript' src='js/cep.js'></script>
		 <script type='text/javascript' src='js/idade.js'></script>
		 
		 <script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idtipo_segmento]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idsegmento_escolar]").html('<option value="">Carregando segmento escolar...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_segmento_escolar.php",
                  {idtipo_segmento:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idsegmento_escolar]").html(valor);					
					 
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
	   
	   function habilitarEcola(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
		
		if(segmento>=15 && segmento<=21 && tipo==4){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		}   
		
	   
	   }
</script>
<script src="../../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />

<!-- FIM DOS REQUISITOS DO MODELO ANTIGO -->


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>    
       <meta content="text/html;  charset=UTF-8" http-equiv="content-type">
  
		<title>FORMULÁRIO</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				
		<!-- datetimepicker -->
		
		<script type="text/javascript">
		      $('#sandbox-container input').datepicker({
              });
		</script>
		

 </head> 
 
	 
	 <body>
     
     
        <div class="container-fluid">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        </div>
     
     
	   <div class="container-fluid">
		 <form class="form-horizontal" role="form" id="form" name="form" method="post"> 
					
					<!--DADOS GERAIS -->
					
					<center>									   
						<h3><legend>DADOS GERAIS</legend></h3>
					</center>                    
			       
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-4">    
									<label class="control-label" for="textinput" name=> PRÉ-INSC:</label> 				
									<select class="form-control" name="idtipoinscricao" id="idtipoinscricao">
									<option value='1'  label=''>MATRÍCULA</option>
									<option value='2' label=''>TRANSFERÊNCIA</option>							
									</select>
									<br />							
							
							</div>
							<div class="col-md-4">	
									<label class=" control-label" for="textinput" > SEGMENTO:</label> 
									<select name="idtipo_segmento" id="idtipo_segmento" tabindex="1" class="form-control" onchange="habilitarEcola()";>
									<option value=''  label=''>ENSINO FUNDAMENTAL</option>
									<option value='' label=''>EJA-EDUCAÇÃO DE JOVENS E ADULTOS</option>							
									</select>
									<br />
							</div>
							<div class="col-md-4">	
									<label class=" control-label" for="textinput"> ANO:</label> <input name='idsegmento_escolar' id="idsegmento_escolar" tabindex="1" onchange="habilitarEcola();" type='text'   class="form-control"><br />
							</div>
						</div>
                        
						<div class="row-fluid">
							<div class="col-md-12" >	 
									<label class="control-label" for="textinput">ESCOLA PRETENDIDA: </label> 
                                    
                                    <select name="idunidade_escolar" class="form-control" id="idunidade_escolar" title="O campo unidade escolar é obrigatório">
                                    
          <?php for($i=0;$i<$linha4;$i++){ ?>
          <option value="<?php echo mysql_result($rs4,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
          <?php } ?>
        </select>
                                    
							</div>					
						</div>
					</div>
                    <div class="form-group">
					
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class=" control-label" for="textinput"> PRÉ-INSC:</label> <input name='' type='text'  class="form-control"><br />				
							</div>
							<div class="col-md-4">	
									<label class=" control-label" for="textinput"> SEGMENTO:</label> <input name='' type='text'   class="form-control"><br />
							</div>
							<div class="col-md-4">	
									<label class=" control-label" for="textinput"> ANO:</label> <input name='' type='text'   class="form-control"><br />
							</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-12" >	 
									<label class="control-label" for="textinput">ESCOLA PRETENDIDA: </label> <input name='' type='text'  class="form-control"/>
							</div>					
						</div>
					</div>
					
					<!-- DADOS DO ALUNO -->
                    <center>									   
						<h3><legend>DADOS DO ALUNO</legend></h3>
					</center>                    
			       
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class=" control-label" for="textinput"> RG:</label> <input name='' type='text'  class="form-control"><br />				
							</div>
							<div class="col-md-8">	
									<label class=" control-label" for="textinput"> NOME:</label> <input name='' type='text'   class="form-control"><br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-3" >	 
									<label class="control-label" for="textinput">NASCIMENTO: </label>
									<input id='sandbox-container input'name='' type='text'   class="form-control"><br />
									
																	
									
									
									
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">IDADE: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">SEXO: </label>
									<select name=''class="form-control">
									<option value=''  label=''>M</option>
									<option value='' label=''>F</option>							
									</select>
									<br />
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">ALTURA: </label> <input name='' type='text'  class="form-control"/>
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">ENDEREÇO: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">NÚMERO: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">COMPLEMENTO: </label> <input name='' type='text'  class="form-control"/>
							</div>                            							
						</div>
						<div class="row-fluid">
							<div class="col-md-3" >	 
									<label class="control-label" for="textinput">BAIRRO: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">MUNICÍPIO: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">UF: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">CEP: </label> <input name='' type='text'  class="form-control"/>
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">TEL.: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">CEL.: </label> <input name='' type='text'  class="form-control"/>
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">EMAIL: </label> <input name='' type='text'  class="form-control"/>
							</div>							
						</div>
						<div class="row-fluid">							
							<div class="col-md-12" >
                            <label class="control-label" for="textinput">NECESSIDADE: </label>
							<div class="checkbox">
								<label for="checkboxes-0">
								  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
								  Auditiva
								</label>
								<label for="checkboxes-0">
								  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
								  Visual
								</label>
								<label for="checkboxes-0">
								  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
								  Motora
								</label>
								<label for="checkboxes-0">
								  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
								  Intelectual
								</label>
								<label for="checkboxes-0">
								  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
								  Múltipla
								</label>
							</div>
				            
                            </div>
							
						</div>				
					</div>
                   <!-- FILIAÇÃO -->
                    <center>									   
						<h3><legend>FILIAÇÃO</legend></h3>
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-6">    
									 <label class="control-label" for="textinput"> PAI:</label> <input name='' type='text'  class="form-control"><br />				
							</div>
							<div class="col-md-6">	
									<label class="control-label" for="textinput"> MÃE:</label> <input name='' type='text'   class="form-control"><br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class="control-label" for="textinput"> RESPONSÁVEL:</label> <input name='' type='text'  class="form-control"><br />				
							</div>
							<div class="col-md-4">	
									<label class="control-label" for="textinput"> CPF:</label> <input name='' type='text'   class="form-control"><br />
							</div>
                            <div class="col-md-4">	
									<label class="control-label" for="textinput"> RENDA:</label> <input name='' type='text'   class="form-control"><br />
							</div>								
						</div>
					</div>	
					<!-- UNIFORME -->
                    <center>									   
						<h3><legend>UNIFORME</legend></h3>
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class=" control-label" for="textinput"> CAMISA:</label> <input name='' type='text'  class="form-control"><br />				
							</div>
							<div class="col-md-4">	
									<label class=" control-label" for="textinput"> BERMUDA:</label> <input name='' type='text'   class="form-control"><br />
							</div>
                            <div class="col-md-4">	
									<label class=" control-label" for="textinput"> PÉ(TÊNIS):</label> <input name='' type='text'   class="form-control"><br />
							</div>							
						</div>						
					</div>
					<div class="form-group">
							<div style="text-align: center;">
							   <button class="btn btn-primary" type="submit" form="" > SALVAR </button> 
							   <button class="btn btn-primary" type="cancel" form="" > CANCELAR </button>
							</div>
					</div>					
					
			 
		 </form>
        </div>
        
        
        
<script>
document.form.idtipoinscricao.value='<?php echo $_POST['idtipoinscricao']?>';
document.form.idtipo_segmento.value='<?php echo $_POST['idtipo_segmento']?>';
document.form.idsegmento_escolar.value='<?php echo $_POST['idsegmento_escolar']?>';
document.form.sexo.value='<?php echo $_POST['sexo']?>';
document.form.idrendafamiliar.value='<?php echo $_POST['idrendafamiliar']?>';
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>

        	 	 
	 </body>
	 
 </html>