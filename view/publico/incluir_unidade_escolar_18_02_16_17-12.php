<?php

require_once('controles/publico.php');

Processo('publico');

?>
     <meta content="text/html;  charset=UTF-8" http-equiv="content-type">
  
		<title>FORMULÁRIO</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        
        <script>
       $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})</script>
				
		<!-- datetimepicker -->
		
<script type="text/javascript">
$('#sandbox-container input').datepicker({
              });
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
        </script>
		<style type="text/css">
			.panel-default > .panel-heading-vermelho {
			 background: #A62A2A; color: #fff; }
			.panel-default > .panel-heading-azul{
			 background: #3366FF; color: #fff; }
			.panel-default > .panel-heading-magenta {
			 background: #FF00FF; color: #fff; }
			.panel-default > .panel-heading-amarelo {
			 background: #FFCC00; color: #fff; }
			.centered { margin: 0 auto !important;
    		float: none !important; }
			 
		.col-md-6 .row-fluid .panel.panel-primary .panel-body .container-fluid.centered .row-fluid.centered .centered .col-md-6 .table.table-responsive tr td {
	color: #FFF;
}
        .col-md-6 .row-fluid .panel.panel-primary .panel-body .container-fluid.centered .row-fluid.centered .centered .col-md-6 .table.table-responsive tr td2 {
	color: #004080;
}
        </style>
        
        
        <!-- Large modal -->
<script>   
  $(document).ready(function() {
   $('#myModal').modal('show');
  });   
  </script>
<div class="container">
  

 
  <div class="modal fadebs-example-modal-lg" tabindex="-1" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal conteúdo-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">
          
          <img src="img/close.png" width="60" height="60" alt=""/>
          
          </span></button>
          
          <center><img src="img/logo.png" class="img-responsive"></center>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
		
                     <div class="alert alert-danger">                  
                    <h2 align="center"><font color="#FF0000">ESCLARECIMENTOS IMPORTANTES:</font></h2>
                    <p></p>
                     <h4><p align="justify">
                     <ol>
                     <li><p >A UNIDADE ESCOLAR PODER&Aacute;, AT&Eacute; O DIA 05/02/2016, ATUALIZAR A INFORMA&Ccedil;&Atilde;O NO SISTEMA SOBRE OS ALUNOS QUE FORAM, <b>E QUE N&Atilde;O FORAM</b>, EFETIVAR SUAS MATR&Iacute;CULAS.</li>
                     <li><p>AS UNIDADES ESCOLARES DEVEM ORIENTAR OS RESPONS&Aacute;VEIS DOS ALUNOS QUE CONSTAREM NA LISTA OFICIAL DA PRIMEIRA FASE E QUE PERDERAM O PRAZO DE EFETIVA&Ccedil;&Atilde;O DE MATR&Iacute;CULA, A PROCURAREM O CAINS/SME PARA REGULARIZAREM SUA SITUA&Ccedil;&Atilde;O</li>
                     <li><p>O CDSE(COORDENADORIA DE DESENVOLVIMENTO DE SOFTWARES EDUCACIONAIS), RECOMENDA A TODAS AS UNIDADES ESCOLARES CONFERIREM SUAS LISTAS PARA IDENTIFICAR ALUNOS COM REGISTRO DUPLICADO. O PROTOCOLO QUE N&Atilde;O SER&Aacute; UTILIZADO DEVE SER ENVIADO POR E-MAIL AO NOSSO SETOR PARA QUE O MESMO SEJA EXCLU&iacute;DO. E-MAIL:cdse@smeduquedecaxias.rj.gov.br</li>
                   </ol>  
                     
                     
                                           <br></p></h4>
                     
                     
                     </div>
                    
                    <div class="alert alert-danger" role="alert">
                                       
                    <h2>DOWNLOADS IMPORTANTES:</h2>
                    <p></p>
                    <h3>
                    <a href="http://192.95.8.216/~pmdcsmen/sgm/Oficio_016-30012016124510.pdf" target="_blank">DOWNLOADO DO OF&Iacute;CIO N&ordm;.:0016/16.</a>
                    <BR>
                    <a href="http://192.95.8.216/~pmdcsmen/sgm/GUIA_RAPIDO _PARA_ATUALIZACAO_DOS_ALUNOS_MATRICULADOS.pdf" target="_blank">GUIA PARA EFETIVAR MATR&Iacute;CULAS.</a>
                    
                    </h3>
                               
                    
                    
                    </div>
		            
              
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
  


<body onLoad="MM_preloadImages('img/pre-inscricao.png','img/transferencia.png','img/quadro-vagas.png','img/atualizar-senha.png','img/1distrito.png','img/2distrito.png','img/3distrito.png','img/4distrito.png')">


         <div class="container-fluid">
		     <div align="center"><!---->
		       <form class="form-horizontal" role="form"> 
		       
		       <!--DADOS GERAIS -->
	         <div class="container-fluid">
               <center>
			   <div class="row">
			     <div class="col-md-4">
				   <div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Pré-inscrição de Matrícula</h3>									
								</div>
								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->
								<div class="panel-body"><img src="img/pre-inscricao-off.png" border="0" class="img-responsive" /></a><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
								</br>
								
							    <!-- incluir CACAICS -->
                                <?php if($_SESSION['tipo']=='CCAIC'){?>								
							   <!--
                                <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_ccaic.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"> CCAIC</a></br>	   <?php }?>
                                
                                <!-- incluir ESCOLA S DO CAMPO  -->
                                <?php if($_SESSION['tipo']=='ESCOLA_CAMPO'){?>										
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_escola_campo.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"> ESCOLAS DO CAMPO</a></br>	
                                <?php }?>
                                
                               
                         
                          <!-- TRANSFERENCIA EXTERNA  -->
                          
                          
						  <!-- DARCY VARGAS EM 17-02-16 -->
                                <?php if($_SESSION['idunidade_escolar']=='31'){?>								
							  
                                <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluirInfantil_Fundamental_Eja_Etapa2(manutencao-05-02-16-17-11).php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"> MATR&Iacute;CULA FORA DO PRAZO</a></br>	   <?php }?>
                                
     				
								<!--<font color="#C8C8C8"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO INFANTIL II (4 a 5 anos)</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO FUNDAMENTAL</font></br>
								<font color="#C8C8C8"> EJA</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO ESPECIAL</font></br>						
					-->											
								</div>
				   </div>
                   
                   
                    <div class="panel panel-info">
							  <div class="panel-heading">
									<h3 class="panel-title">Atualiza&ccedil;&atilde;o de senha</h3>
				       </div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&amp;form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/atualizar-senha.png" border="0" class="img-responsive" /></a></div>
								
				   </div>
                   
                   
                   
                   
                   
                   
                   </div>
                   
                   <div class="col-md-4">
				    
                    
                     <div class="panel panel-default">
								<div class="panel-heading">
									<p h3 class="panel-title">PRORROGA&Ccedil;&Atilde;O:</p> <p>Quadro de vagas da Segunda fase até amanhã (23/01 no horário limite de 11:59)</p>
								</div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> 
                                     -->
                                   <!-- <a href="default.php?pg=<?php echo base64_encode("view/vagas/atualizaVagasIndividual.php");?>&form=<?php echo base64_encode("Cadastro de Vagas");?>">ATUALIZA&Ccedil;&Atilde;O  DE VAGAS DA SEGUNDA FASE</a> -->
                                   
                                   <p style="color: #999; font-weight: bold;">ENCERRADO &Agrave;S 9:30 MIN DO DIA 27/01/2016.</p>
                                  
									<!--
									<a href="#" target="_self"><font color="#FF0000">ATUALIZAÇÕES DO QUADRO DE VAGAS ECERRADAS CONFORME RESOLUÇÃO.</font></a> <BR>
									        
									-->
									
                                    
                                    
                                    
                                    
                      </div>
								
				   </div>
                  
                       <div class="panel panel-default">
                         <div class="panel-heading">
                           <h3 class="panel-title">Quadro de vagas da Unidade Escolar</h3>
                         </div>
                         <div class="panel-body">
                           <!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
                           <?php
                                    if($_SESSION['tipo']=='ESCOLA COMUM_TRANSFERENCIA_INTERNA'){?>
                           <!-- <a href="view/relatorios/quadroVagas_transferencia_interna_individual.php" target="_blank">CONSULTAR QUADRO DE TRANSFER&Ecirc;NCIA INTERNA</a>
                                </br>
                                
                                <a href="view/relatorios/quadroVagas_transferencia_externa_individual.php" target="_blank">CONSULTAR QUADRO DE TRANSFER&Ecirc;NCIA EXTERNA</a>
                                
                                -->
                           <?php }?>
                           </BR>
                         </div>
                       </div>
                     
                     <div class="panel panel-danger">
								<div class="panel-heading">
									<p h3 class="panel-title">PRORROGA&Ccedil;&Atilde;O:</p> <p>Transferências Internas e Externas</p>
								</div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
                                    <p>
                                    <a href="http://192.95.8.216/~pmdcsmen/sgm/Portaria_003_de_08_de_janeiro_de_2016.pdf" target="_blank">
                    <font color="#FF0000">LEIA COM ATEN&Ccedil;&Atilde;O A PORTARIA QUE REGULAMENTA A PRORROGA&Ccedil;&Atilde;O DOS PRAZOS DE TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS INTERNAS E EXTERNAS.</font> </a></p>
                                    
                                
							    <?php if($_SESSION['tipo']=='ESCOLA COMUM_TRANSFERENCIA_INTERNA'){?>		       							    
                          <!--<a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_interna.php");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>">TRANSFERÊNCIA DE MATR&Iacute;CULAS INTERNAS</a></br><br>
                    -->
						  		       							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_externa.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("2");?>"> TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS</a></br> <?php }?>
                                
                               <?php if($_SESSION['tipo']=='ESCOLA_CAMPO'){?>				 
                              <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_externa.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("2");?>"> TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS</a></br> <?php }?>
                              
                              <?php if($_SESSION['tipo']=='CCAIC'){?>				 
                              <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_externa.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("2");?>"> TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS</a></br> <?php }?>   
                                
                                </div>
								
	  </div>
						</div><!--fim col-->

						<div class="col-md-4">
				     <div class="panel panel-info">
							  <div class="panel-heading">
									<h3 class="panel-title">Lista de Inscri&ccedil;&otilde;es</h3>
				       </div>
								
					   <div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
                                    
									<?php
                                    if($_SESSION['tipo']=='ESCOLA COMUM_TRANSFERENCIA_INTERNA'){?>
                                    
                                    
							    <a href="view/relatorios/lista_transferencia_interna_individual.php" target="_blank"> TRANSFER&Ecirc;NCIA INTERNA</a>
                                
                                </BR>
                                
                                <a href="view/relatorios/lista_transferencia_externa_individual.php" target="_blank"> TRANSFER&Ecirc;NCIA EXTERNA</a>
                                
                                <br />
									<?php }?>
								
                                   <?php
                                    if(@mysql_result($rs5,0,'total')>0){?>
                                <!-- lista de sorteados -->
                                
                                 <a href="view/relatorios/lista_sorteados.php" target="_blank"> LISTA DE SORTEADOS</a>
                                
                                <br />
                               
                                  <?php }?>
                                
                                 <?php
                                    if($linha6>0){?>
                                <!-- lista de sorteados -->
                                
                                 <a href="view/relatorios/lista_contemplados_individual_ed_infantil_fund_eja.php" target="_blank"> LISTA DE CANDIDATOS CONTEMPLADOS DA PRÉ-ESCOLA, DO 1° ANO DO ENSINO FUNDAMENTAL E DA ETAPA I DO EJA</a>
                                
                                <br />
                               
                                   
                                   <?php }?>
                                  
                                   <a href="view/relatorios/lista_contemplados_individual_ed_infantil_fund_eja.php" target="_blank">LISTA  DE CANDIDATOS CONTEMPLADOS DA EDUCA&Ccedil;&Atilde;O INFANTIL (4 a 5 anos) | ED. FUNDAMENTAL (1&ordm; ano) | EJA - ETAPA I </a></br >   
                               
                               
                                  
								
								  <?php
                                    if($_SESSION['tipo']=='ESCOLA_CAMPO'){?>
                                    <a href="view/relatorios/lista_escola_campo_individual.php" target="_blank"> Escola do Campo</a> <br />
                                    
                                    
                                    
                                    <?php }?>
                                    
                                    
                                    <?php
                                    if($_SESSION['tipo']=='CCAIC'){?>
                                    <a href="view/relatorios/lista_escola_ccaic_individual.php" target="_blank"> CCAIC</a> <br />
                                    
                                    
                                    
                                    <?php }?>
                                    
                                </div>
				     </div>
						</div>
                        
                        
                        </div>

			   <!-- ESCOLAS CCAIC --></div>
				<!--
					<div class="form-group">
			 			 
			        
					 <table align="center" border="0" cellpadding="0" cellspacing="0" width="943">
							<tbody><tr>
								<th rowspan="2" scope="col" width="28">
									&nbsp;
								</th>
								<th scope="col" height="133" width="226">
									<a href="Inscricao.aspx?acao=1" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','imagens/OVER/INSCRICAO_over.png',1)">
										<img style="border: none" src="imagens/INSCRICAO.png" id="Image6" height="133" width="226"></a>
								</th>
								<th scope="col" width="219">
									<a href="Consulta.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','imagens/OVER/CONSULTE_over.png',1)">
										<img style="border: none" src="imagens/CONSULTE.png" id="Image7" height="133" width="219"></a>
								</th>
								<th scope="col" width="220">
									<a href="Inscricao.aspx?acao=3" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image','','imagens/OVER/ALTERE_over.png',1)">
										<img style="border: none" src="imagens/ALTERE.png" id="Image" height="133" width="220"></a>
								</th>
								<th scope="col" width="222">
									<a href="Duvidas.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','imagens/OVER/DUVIDAS_over.png',1)">
										<img style="border: none" src="imagens/DUVIDAS.png" id="Image9" height="133" width="222"></a>
								</th>
								<th rowspan="2" scope="col" width="28">
									&nbsp;
								</th>
							</tr>
							<tr>
								<td height="130" width="226">
									<a href="ListaDeEscolas.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','imagens/OVER/LISTA_over.png',1)">
										<img style="border: none" src="imagens/LISTA.png" id="Image10" height="130" width="226"></a>
								</td>
								<td width="219">
									<a href="Resolucao.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','imagens/OVER/REGRAS_over.png',1)">
										<img style="border: none" src="imagens/REGRAS.png" id="Image11" height="130" width="219"></a>
								</td>
								<td width="220">
									<a href="ProximasFases.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','imagens/OVER/FASES_over.png',1)">
										<img style="border: none" src="imagens/FASES.png" id="Image12" height="130" width="220"></a>
								</td>
								<td width="222">
									<a href="Calendario.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','imagens/OVER/CALENDARIO_over.png',1)">
										<img style="border: none" src="imagens/CALENDARIO.png" id="Image13" height="130" width="222"></a>
								</td>
							</tr>
						</tbody>
					</table>
		 
		 </div> 
</form>-->
