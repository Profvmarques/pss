<?php
require_once('controles/candidatos.php');
Processo('incluirPublico');
?>

<!-- INÍCIO DOS REQUISITOS DO MODELO ANTIGO -->

<link charset="utf-8" title="no title" media="screen" type="text/css" href="js/jquery.fancybox-1.3.1.css" rel="stylesheet">
<script type='text/javascript' src='js/cep.js'></script>
		 <script type='text/javascript' src='js/idade.js'></script>
		 <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		 
		 <script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO PARA SEGMENTO ESCOLAR*****************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idtipo_segmento]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idsegmento_escolar]").html('<option value="">Carregando segmento escolar...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_segmento_escolar.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idtipo_segmento:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idsegmento_escolar]").html(valor);					
					 
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
	   
	    // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR*****************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idsegmento_escolar]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idunidade_escolar]").html('<option value="">Carregando unidade escolar...</option>');
			
			//ADRIANO
			$("select[name=idunidade_escolar2]").html('<option value="">Carregando unidade escolar...</option>');
			$("select[name=idunidade_escolar3]").html('<option value="">Carregando unidade escolar...</option>');
			$("select[name=idunidade_escolar4]").html('<option value="">Carregando unidade escolar...</option>');
			$("select[name=idunidade_escolar5]").html('<option value="">Carregando unidade escolar...</option>');
			//
			
			
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_unidade_escolar.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idsegmento_escolar:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idunidade_escolar]").html(valor);					
					 
					 //ADRIANO
					  $("select[name=idunidade_escolar2]").html(valor);
					  $("select[name=idunidade_escolar3]").html(valor);
					  $("select[name=idunidade_escolar4]").html(valor);
					  $("select[name=idunidade_escolar5]").html(valor);
					 //
                  }
             )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
	   function desabilitarEscola(){	  	
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		 
		 // ADRIANO
		 document.getElementById('tdidunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').title="";

		 document.getElementById('tdidunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').title="";

		 document.getElementById('tdidunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').title="";

         document.getElementById('tdidunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').title="";			 
		
		 //
		
	   }
	  
	
	   
	    function habilitarEscola2(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
			tipoinscricao=<?php echo base64_decode($_GET['ti']);?>;
		
		if((segmento>6 && segmento<15 && tipo==1 && tipoinscricao==2) || (segmento>=2 && segmento<=5 && tipo==2 && tipoinscricao==2) || (tipo==4)){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').title="O campo unidade escolar é obrigatório";
		 
		 //ADRIANO
		 
		 document.getElementById('tdidunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').title="O campo unidade escolar é obrigatório";
		 //
		 
		 
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		  
		 //ADRIANO 
		 
		 document.getElementById('tdidunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').title="";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').title="";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').title="";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').title="";		 
		 
		 //
		  
		}
		}		
	   
	   function habilitarEscola(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
			tipoinscricao=document.form.idtipoinscricao.value;
		
		if(segmento>6 && segmento<15 && tipo==1 && tipoinscricao==2){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').title="O campo unidade escolar é obrigatório";
		  
		  //ADRIANO 
		 document.getElementById('tdidunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').title="O campo unidade escolar é obrigatório";
		 
		  //
		  
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		 
		 //ADRIANO 
		 document.getElementById('tdidunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').title="";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').title="";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').title="";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').title="";
		 
		 //
		 
		}   
		
	   
	   } 
	  
	   
	    $(document).ready(function(){
		$("#aceite").click(function(evento){
			if ($("#aceite").attr("checked")){
			$("#todos").css("display", "block");
			}else{
				$("#todos").css("display", "none");
			}
			});
		});
	   
	   
	 
</script>


<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $(document).pngFix();
        $("a.fancy_img").fancybox({
            'titlePosition': 'inside',
            'transitionIn': 'elastic',
            'transitionOut': 'elastic'
        });
    });
</script>

<!--
<link href="../../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
-->

<!-- FIM DOS REQUISITOS DO MODELO ANTIGO -->



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->	
        	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				
		<!-- datetimepicker -->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker.min.css">
		<!--
		<script type="text/javascript">
		      $('#sandbox-container input').datepicker({
              });
		</script>-->
		


 
	 
	 <body>
	   <div class="container">
		 <form class="form-horizontal"  id="form" name="form" method="post" > 
					
					<!--DADOS GERAIS -->
					
					<center>									   
						<h3><legend>DADOS GERAIS</legend></h3>
					</center> 
                    
                    <center><input name="aceite" type="checkbox" id="aceite" />      
&nbsp;

<b>
<a href="view/candidatos/termo.html" class="fancy_img" target="_blank">TERMO DE ACEITE &nbsp;</a>
</b></center>                   
			       <br />
				   
				   <div id="todos" style="display: none;">
				   
					<div class="form-group">							
						<div class="row-fluid">
							<!--<div class="col-md-4">    
									<label class="control-label" for="textinput" name=> PRÉ-INSCINCRIÇÃO DE MATRÍCULA:</label> 				
									<select class="form-control" name="idtipoinscricao" id="idtipoinscricao">
									<option value='1'  label=''>MATRÍCULA</option>
                                    </select>
									<br />							
							
							</div>-->
							<div class="col-md-6">	
									<label class=" control-label" for="textinput" > SEGMENTO:</label>
									<span style="margin-left:auto">
									<select name="idtipo_segmento" class="form-control" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar é obrigatório" onChange="desabilitarEcsola()">
									  <option value="">Escolha o tipo de segmento</option>
									  <?php for($i=0;$i<$linha2;$i++){?>
									  <option value="<?php echo mysql_result($rs2,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
									  <?php }?>
								    </select>
									</span><br />
							</div>
							<div class="col-md-6">	
																	
									<input name="idsegmento_escolar" type="hidden" id="idsegmento_escolar" value="20"/>
							</div>
						</div>
                        
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">ESCOLA PRETENDIDA (1&deg; OP&Ccedil;&Atilde;O): </label> 
                                    
                                    <select name="idunidade_escolar" class="form-control" id="idunidade_escolar" title="O campo unidade escolar é obrigatório">
                                    
									  <?php for($i=0;$i<$linha4;$i++){ ?>
									  <option value="<?php echo mysql_result($rs4,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
									  <?php } ?>
									</select>
                         <br />           
							</div>	<!-- fim col -->
                            
                            </div>
                            
                        
                        
					</div>
                    
					
					<!-- DADOS DO ALUNO -->
                    <center>									   
						<h3><legend>DADOS DO ALUNO</legend></h3>
					</center>                    
			       
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class=" control-label" for="textinput"> CERTIDÃO DE NASCIMENTO OU RG:</label> <input type="text" name="rg" id="rg"  title="O campo rg é obrigatório" value="<?php echo $_POST['rg']?>"/  class="form-control"><br />				
							</div>
							<div class="col-md-8">	
									<label class=" control-label" for="textinput"> NOME:</label> <input name="nome" type="text"  id="nome" placeholder="" value="<?php echo $_POST['nome']?>"/   class="form-control"><br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	
									
									<label class="control-label" for="textinput">NASCIMENTO: </label>									
									
										<input name="nascimento" type="text" class="form-control" id="nascimento" onKeyPress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onBlur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"  title="O campo nascimento é obrigatório" />
										<!-- <span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>-->
																		
									
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">IDADE: </label>
									<input type="text" name="idade" id="idade" class="form-control"  title="O campo idade é obrigatório" value="<?php echo $_POST['idade']?>"/>
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">SEXO: </label>
									<select name=''class="form-control">
									<option value=''  label=''>M</option>
									<option value='' label=''>F</option>							
									</select>
									<br />
							</div>                            						
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">ENDEREÇO: </label>
									<input name="endereco" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $_POST['endereco']?>"/>
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">NÚMERO: </label>
									<input name="numero" type="text" class="form-control" id="numero" placeholder="" value="<?php echo $_POST['numero']?>"/>
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">COMPLEMENTO: </label>
									<input name="complemento" type="text" class="form-control" id="complemento" placeholder="" value="<?php echo $_POST['complemento']?>" />
                            </div>                            							
						</div>
						<div class="row-fluid">
							<div class="col-md-3" >	 
									<label class="control-label" for="textinput">BAIRRO: </label>
									<input name="bairro" type="text" class="form-control" id="bairro" placeholder=""  value="<?php echo $_POST['bairro']?>" />
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">MUNICÍPIO: </label>
									<input name="cidade" type="text" class="form-control" id="cidade" placeholder="" value="<?php echo $_POST['cidade']?>" />
                            </div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">UF: </label>
									<input name="uf" type="text" class="form-control" id="uf" placeholder="" value="<?php echo $_POST['uf']?>"/>
                            </div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">CEP: </label>
									<input name="cep" type="text" class="form-control" id="cep"  title="O campo cep é obrigatório" onKeyPress="return Mascaras_Format(document.form,'cep','99999999',event);" value="<?php echo $_POST['cep']; ?>" maxlength="8" placeholder=""/>
                            </div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">TEL.: </label>
									<input name="telefone" type="text" class="form-control" id="telefone" title="Campo telefone é obrigatório" onKeyPress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="15" placeholder="" />
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">CEL.: </label>
									<input name="celular" type="text" class="form-control" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onKeyPress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" />
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">EMAIL: </label>
									<input name="email" type="text" class="form-control" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['email']; ?>"  title=""/>
                            </div>							
						</div>
						<div class="row-fluid">							
							<div class="col-md-12" >
                            <label class="control-label" for="textinput">DEFICIÊNCIA: </label>
							<div class="checkbox">
								<label for="checkboxes-0">
								  <input name="auditiva" type="checkbox" id="auditiva" />
                                   Auditiva / Surdez</label>
								<label for="checkboxes-0">
								  <input name="visual" type="checkbox" id="visual" />
                                   Visual / Cegueira </label>
								<label for="checkboxes-0">
								  <input name="motora" type="checkbox" id="motora" />
                                   Física </label>
								<label for="checkboxes-0">
								  <input name="mental" type="checkbox" id="mental" />
                                   Intelectual </label>
								<label for="checkboxes-0">
								  <input name="multipla" type="checkbox" id="multipla" />
                                    Múltipla </label>
								<label for="checkboxes-0">
								  <input name="transtorno_global" type="checkbox" id="transtorno_global" />
                                    Transtorno global do desenvolvimento </label>
										</br>
									Outros/Laudo
								  <input name="deficiencias_outras" type="text" class="form-control" id="deficiencias_outras" />

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
									 <label class="control-label" for="textinput"> PAI:</label>
									 <input name="pai" type="text" class="form-control" id="pai" placeholder="" value="<?php echo $_POST['pai']?>"/>
									 <br />				
							</div>
							<div class="col-md-6">	
									<label class="control-label" for="textinput"> MÃE:</label>
									<input name="mae" type="text" class="form-control" id="mae" placeholder="" value="<?php echo $_POST['mae']?>" />
									<br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class="control-label" for="textinput"> RESPONSÁVEL:</label>
									 <input name="responsavel" type="text" class="form-control" id="responsavel" placeholder="" value="<?php echo $_POST['responsavel']?>" />
									 <br />				
							</div>
							<div class="col-md-4">	
									<label class="control-label" for="textinput"> CPF:</label>
									<input name="cpf" type="text" class="form-control" id="cpf"  title="O campo cpf é obrigatório" onKeyPress="return Mascaras_Format(document.form,'cpf','99999999999',event);" value="<?php echo $_SESSION['login'];?>" onBlur="TestaCPF(document.form.cpf.value);" maxlength="11" disabled="disabled"/>
									<br />
							</div>
                            <div class="col-md-4">	
									<label class="control-label" for="textinput"> RENDA:</label>
									<select name="idrendafamiliar" class="form-control" id="idrendafamiliar">
									  <option value="">--</option>
									  <?php for($i=0;$i<$linha3;$i++){?>
									  <option value="<?php echo mysql_result($rs3,$i,'idrendafamiliar');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
									  <?php }?>
							  </select>
									<br />
							</div>								
						</div>
					</div>	
					<!-- UNIFORME -->
                    <center>									   
						<h3><legend>UNIFORME</legend></h3>
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
						    <div class="col-md-3" >	 
									<label class="control-label" for="textinput">ALTURA DO ALUNO: </label> <input name='' type='text'  class="form-control"/>
							</div>	
							<div class="col-md-3">    
									 <label class=" control-label" for="textinput"> CAMISA:</label> 
                                     <select name='camisa_aluno' id='camisa_aluno' class="form-control">
									<option value='2 ANOS'  label=''>2 ANOS</option>
									<option value='4 ANOS'  label=''>4 ANOS</option>
									<option value='6 ANOS'  label=''>6 ANOS</option>
									<option value='8 ANOS'  label=''>8 ANOS</option>
									<option value='10 ANOS'  label=''>10 ANOS</option>
									<option value='12 ANOS'  label=''>12 ANOS</option>
									<option value='14 ANOS'  label=''>14 ANOS</option>
									<option value='16 ANOS'  label=''>16 ANOS</option>
									<option value='P - ADULTO'  label=''>P - ADULTO</option>
									<option value='M - ADULTO'  label=''>M - ADULTO</option>
									<option value='G - ADULTO'  label=''>G - ADULTO</option>
									<option value='GG - ADULTO'  label=''>GG - ADULTO</option>
									<option value='EG - ADULTO'  label=''>EG - ADULTO</option>
									</select><br />				
							</div>
							<div class="col-md-3">	
									<label class=" control-label" for="textinput"> BERMUDA:</label> <select name='bermuda_aluno' id='bermuda_aluno' class="form-control">
									<option value='2 ANOS'  label=''>2 ANOS</option>
									<option value='4 ANOS'  label=''>4 ANOS</option>
									<option value='6 ANOS'  label=''>6 ANOS</option>
									<option value='8 ANOS'  label=''>8 ANOS</option>
									<option value='10 ANOS'  label=''>10 ANOS</option>
									<option value='12 ANOS'  label=''>12 ANOS</option>
									<option value='14 ANOS'  label=''>14 ANOS</option>
									<option value='16 ANOS'  label=''>16 ANOS</option>
									<option value='P - ADULTO'  label=''>P - ADULTO</option>
									<option value='M - ADULTO'  label=''>M - ADULTO</option>
									<option value='G - ADULTO'  label=''>G - ADULTO</option>
									<option value='GG - ADULTO'  label=''>GG - ADULTO</option>
									<option value='EG - ADULTO'  label=''>EG - ADULTO</option>
									
									
									</select><br />
							</div>
                            <div class="col-md-3">	
							
									
									<label class="control-label" for="textinput">PÉ (TÊNIS):</label>
									<input name="pe_aluno" title="O campo tipo de PÉ (TÊNIS) é obrigatório" type="text" class="form-control" id="pe_aluno" placeholder="" value="<?php echo $_POST['pe_aluno'];?>" />
									<br />	
									
									
							</div>							
						</div>						
					</div>
					<div class="form-group">
							<div style="text-align: center;">
							    <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                    </i> SALVAR</button>
                                    <button type="button" class="btn" onClick="javascript:history.back()" >CANCELAR</button>
                                    <input name="ok" type="hidden" id="ok"/>
					</div>					
					 </div>
			    </div>  
		 </form>
       
        
   
        
<script>
document.form.idtipoinscricao.value='<?php echo $_POST['idtipoinscricao']?>';
document.form.idtipo_segmento.value='<?php echo $_POST['idtipo_segmento']?>';
document.form.idsegmento_escolar.value='<?php echo $_POST['idsegmento_escolar']?>';
document.form.sexo.value='<?php echo $_POST['sexo']?>';
document.form.idrendafamiliar.value='<?php echo $_POST['idrendafamiliar']?>';
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>

        <script src="http://www.smeduquedecaxias.rj.gov.br/sgm/js/bootstrap-datepicker.min.js"></script><!---->
		
        <script type="text/javascript">            
            $(document).ready(function () {                
                $('#datepicker').datepicker({
                    format: "dd/mm/yyyy",
					language: "pt-BR
                });				
            });
        </script>
        	 	 
	 </body>
	 
 </html>