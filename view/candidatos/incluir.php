﻿<?php
require_once('controles/inscricao.php');
Processo('incluirPublico');
?>

		 <script type='text/javascript' src='js/idade.js'></script>


		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->	
        	
		<script src="js/bootstrap.min.js"></script>
				
		<!-- datetimepicker -->
		
		<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
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
						<h3><legend>EDITAL N.º 003 DO PROCESSO SELETIVO SIMPLIFICADO N.º 01/2016
                        <br /><br />
                        DADOS DO CANDIDATO


                        </legend>
						</h3>
					</center> 
                    
             
		   <div class="form-group">							
						<div class="row-fluid">
							<!--<div class="col-md-4">    
									<label class="control-label" for="textinput" name=> PRÉ-INSCINCRIÇÃO DE MATRÍCULA:</label> 				
									<select class="form-control" name="idtipoinscricao" id="idtipoinscricao">
									<option value='1'  label=''>MATRÍCULA</option>
                                    </select>
									<br />							
							
							</div>-->
							<div class="col-md-6"><br />           
							</div>
						</div>
						<div class="row-fluid"><!-- fim col -->
             </div><!-- fim ROW -->
                        </div>
                   
			       
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-4">    
							  <label class=" control-label" for="textinput"> CPF<strong><font color="#FF0000">*</font></strong>:</label> <input name="cpf" type="text"/  class="form-control" id="cpf"  title="O campo cpf é obrigatório" value="<?php echo $_POST['cpf']?>" maxlength="11"><br />				
							</div>
                            <div class="col-md-4">    
									 <label class=" control-label" for="textinput"> RG<strong><font color="#FF0000">*</font></strong>:</label> <input type="text" name="rg" id="rg"  title="O campo rg é obrigatório" value="<?php echo $_POST['rg']?>"/  class="form-control"><br />				
							</div>
                            <div class="col-md-3" >	
									
									<label class="control-label" for="textinput">DATA DE EXPEDIÇÃO<strong><font color="#FF0000">*</font></strong>: </label>									
									<div class='input-group date' id='datepicker'>
										<input name="data_expedicao" type="text" class="form-control" id="data_expedicao" onKeyPress="return Mascaras_Format(document.form,'data_expedicao','99/99/9999',event);" size="20" maxlength="10" onBlur="return valida_data1(document.form.data_expedicao,5);" value="<?php echo $_POST['data_expedicao']; ?>"  title="O campo data de expedição é obrigatório" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>									
									
						  </div>
							<div class="col-md-8">	
									<label class=" control-label" for="textinput"> NOME COMPLETO<strong><font color="#FF0000">*</font></strong>:</label> <input name="nome" type="text"  id="nome" placeholder="" value="<?php echo $_POST['nome']?>" title="O campo nome é obrigatório" class="form-control" /><br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-3" >	
									
									<label class="control-label" for="textinput">NASCIMENTO<strong><font color="#FF0000">*</font></strong>: </label>									
									<div class='input-group date' id='datepicker'>
										<input name="nascimento" type="text" class="form-control" id="nascimento" onKeyPress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onBlur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"  title="O campo nascimento é obrigatório" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>									
									
							</div>
							<div class="col-md-3" ><br />
						  </div>
                          <div class="col-md-3" >	 
							<label class="control-label" for="textinput">SEXO<strong><font color="#FF0000">*</font></strong>: </label>
							<select name='sexo'class="form-control" id="sexo" title="O campo sexo é obrigatório">
							  <option value='M'  label=''>M</option>
							  <option value='F' label=''>F</option>
						    </select>
                          </div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">ENDEREÇO<strong><font color="#FF0000">*</font></strong>: </label>
									<input name="endereco" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $_POST['endereco']?>" title="O campo endereço é obrigatório"/>
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">NÚMERO<strong><font color="#FF0000">*</font></strong>: </label>
									<input name="numero" type="text" class="form-control" id="numero" placeholder="" value="<?php echo $_POST['numero']?>" title="O campo número é obrigatório"/>
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">COMPLEMENTO: </label>
									<input name="complemento" type="text" class="form-control" id="complemento" placeholder="" value="<?php echo $_POST['complemento']?>" />
                            </div>                            							
						</div>
						<div class="row-fluid">
							<div class="col-md-3" >	 
									<label class="control-label" for="textinput">BAIRRO<strong><font color="#FF0000">*</font></strong></label>
									<input name="bairro" type="text" class="form-control" id="bairro" placeholder=""  value="<?php echo $_POST['bairro']?>" title="O campo bairro é obrigatório"/>
							</div>
                          <div class="col-md-3" >	 
							<label class="control-label" for="textinput">MUNICÍPIO<strong><font color="#FF0000">*</font></strong>: </label>
								  <input name="municipio" type="text" class="form-control" id="municipio" placeholder="" value="<?php echo $_POST['municipio']?>" title="O campo município é obrigatório" />
                            </div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">UF<strong><font color="#FF0000">*</font></strong>: </label>
									<select name='uf'class="form-control" id="uf" title="O campo uf é obrigatório">
									  <option value=""></option>
									  <option value="AC">AC</option>
									  <option value="AL">AL</option>
									  <option value="AM">AM</option>
									  <option value="AP">AP</option>
									  <option value="BA">BA</option>
									  <option value="CE">CE</option>
									  <option value="DF">DF</option>
									  <option value="ES">ES</option>
									  <option value="GO">GO</option>
									  <option value="MA">MA</option>
									  <option value="MG">MG</option>
									  <option value="MS">MS</option>
									  <option value="MT">MT</option>
									  <option value="PA">PA</option>
									  <option value="PB">PB</option>
									  <option value="PE">PE</option>
									  <option value="PI">PI</option>
									  <option value="PR">PR</option>
									  <option value="RJ">RJ</option>
									  <option value="RN">RN</option>
									  <option value="RO">RO</option>
									  <option value="RR">RR</option>
									  <option value="RS">RS</option>
									  <option value="SC">SC</option>
									  <option value="SE">SE</option>
									  <option value="SP">SP</option>
									  <option value="TO">TO</option>
							  </select>
                            </div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">CEP<strong><font color="#FF0000">*</font></strong>: </label>
									<input name="cep" type="text" class="form-control" id="cep"  title="O campo cep é obrigatório" onKeyPress="return Mascaras_Format(document.form,'cep','99999999',event);" value="<?php echo $_POST['cep']; ?>" maxlength="8" placeholder="" />
                            </div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">
							      TEL<strong><font color="#FF0000">*</font></strong>.: </label>
					          <input name="telefone" type="text" class="form-control" id="telefone" title="Campo telefone é obrigatório" onKeyPress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="15" placeholder="" />
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">CEL<strong><font color="#FF0000">*</font></strong>.: </label>
									<input name="celular" type="text" class="form-control" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onKeyPress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" />
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">EMAIL<strong><font color="#FF0000">*</font></strong>: </label>
									<input name="email" type="text" class="form-control" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['email']; ?>"  title="O campo e-mail é obrigatório"/>
                            </div>							
						</div>
                        <div class="col-md-6">
                        <br />
						  <label class=" control-label" for="textinput3" > CARGO PRETENDIDO<strong><font color="#FF0000">*</font></strong>:</label>
						  <span style="margin-left:auto">
						    <select name="idcargos" class="form-control" tabindex="1" id="idcargos" title="O campo cargo pretendido é obrigatório" >
						      <option value="">Escolha o cargo pretendido</option>
						      <?php for($i=0;$i<$linha;$i++){?>
						      <option value="<?php echo mysql_result($rs,$i,'idcargos');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
						      <?php }?>
					      </select>
					      </span><br />
					  </div>
                      <div class="col-md-6">
                        <br />
					    <label class=" control-label" for="textinput3" > EXPERIÊNCIA PROFISSIONAL<strong><font color="#FF0000">*</font></strong>:</label>
						  <span style="margin-left:auto">
						    <select name="idexperiencia" class="form-control" tabindex="1" id="idexperiencia" title="O campo experiência profissional é obrigatório">
						      <option value="">Escolha os anos de experiência profissional</option>
						      <?php for($i=0;$i<$linha3;$i++){?>
						      <option value="<?php echo mysql_result($rs3,$i,'idexperiencia');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
						      <?php }?>
					      </select>
					      <br />
				        </span><br />
					  </div>
						<div class="row-fluid">							
							<div class="col-md-12" >
                           
							</div>
							
						</div>				
					</div>
           <!-- FILIAÇÃO -->
           <div class="col-md-6">
          
               <input name="experiencia_adm_publica" type="checkbox" id="experiencia_adm_publica">
               EXPERIÊNCIA NA  ADMINISTRAÇÃO PÚBLICA EM ATUAÇÃO COMPATÍVEL NA ÁREA DA FUNÇÃO PRETENDIDA  (MINÍMA DE 02 ANOS).
           </div>
           
           <br /><br /><br /><br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CURSOS E PARTICIPAÇÃO EM PROJETOS</strong>
           <br /><br />
           <p>
             <input name="participacao_projetos" type="checkbox" id="participacao_projetos">
             PARTICIPAÇÃO EM PROJETOS  NA ÁREA PRETENDIDA (MÁXIMO DE 01 PROJETO EM 2015).</p>
           <p>
             <input name="curso_extensao" type="checkbox" id="curso_extensao">
             CURSO DE EXTENSÃO NA  ÁREA PRETENDIDA – CARGA HORÁRIA MINÍMA DE 30H (MÁXIMO DE 01 CURSO). </p>
           <p>
             <input name="curso_aperfeicoamento" type="checkbox" id="curso_aperfeicoamento">
           CURSO DE APERFEIÇOAMENTO  NA ÁREA PRETENDIDA – CARGA HORÁRIA MINÍMA DE 180H (MÁXIMO DE 01 CURSO).</p>
           <p>
             <input name="inf_basica" type="checkbox" id="inf_basica">
           CURSO DE INFORMÁTICA  BÁSICA.</p>
           <center>
           <h3><legend>SENHA DE ACESSO PARA IMPRIMIR / EDITAR</legend>
			 </h3>
             <br />
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
						  <div class="col-md-4">	
						    <label class=" control-label" for="textinput"> SENHA DE ACESSO<strong><font color="#FF0000">*</font></strong>:</label>
						    <input name="senha" type="password" class="form-control" id="senha" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['senha']; ?>"  title="O campo senha é obrigatório"/>
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
					
			 
		 </form>
        </div>
        
        
        
<script>

document.form.sexo.value='<?php echo $_POST['sexo']?>';
document.form.uf.value='<?php echo $_POST['uf']?>';
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
 <script>
 document.form.idcargos.value='<?php echo $_POST['idcargos'];?>';
 document.form.idtitulacao.value='<?php echo $_POST['idtitulacao'];?>';
 document.form.idexperiencia.value='<?php echo $_POST['idexperiencia'];?>';
 </script>

        <script src="js/bootstrap-datepicker.min.js"></script><!---->
		
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
