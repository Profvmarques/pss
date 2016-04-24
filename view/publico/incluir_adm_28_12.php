<?php

require_once('controles/publico.php');

Processo('publicoGestao');


						
						 ini_set("memory_limit","1200M");
						 		 
?>
   
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


<body onLoad="MM_preloadImages('img/pre-inscricao.png','img/transferencia.png','img/quadro-vagas.png','img/atualizar-senha.png','img/1distrito.png','img/2distrito.png','img/3distrito.png','img/4distrito.png')">

         <div class="container-fluid">
		     <!---->
			 <form class="form-horizontal" role="form"> 
					
					<!--DADOS GERAIS -->
					
					 
				<div class="container-fluid">
                <center>
			   <div class="row">
			     <div class="col-md-6">
						  <div class="panel panel-success">
								<div class="panel-heading">
								  <h3 class="panel-title">Relat&oacute;rios (Planilhas do MS Excel)</h3>
								</div>
								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->
								<div class="panel-body"></a><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
								</br>
								
							    <!-- incluirEd_infantil								
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluirEd_infantil.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</a></br> -->	
                                
                                					
								<a href="view/relatorios/quadroVagas_CAMPO_EXCEL.php"> QUADRO DE VAGAS ESCOLAS DO CAMPO</a></br>
                                
                                								
							    <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_CCAIC_EXCEL.php"> QUADRO DE VAGAS CCAIC</a></br>
                                							    <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_Transferencia_Interna_EXCEL.php" target="_blank"> QUADRO DE VAGAS DE TRANSFERÊNCIAS INTERNAS</a></br>
                                
            
            <!-- incluir 1º ANO FUNDAMENTAL  -->						
                                <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_Ed_Infantil_Sorteio_EXCEL.php"> LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL(SORTEIO)</a></br>
                                
                                
                                <a href="http://177.185.193.252/sgm/view/relatorios/Lista_Ed_Infantil_fundamental_eja_EXCEL.php"> LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL, ED. FUNDAMENTAL E EJA(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a></br>
            
            
                                
           
           
                                
                                
                                
                                
								<!--<font color="#C8C8C8"> EDUCAÇÃO INFANTIL II (4 a 5 anos)</font></br> 
								<font color="#C8C8C8"> EDUCAÇÃO FUNDAMENTAL</font></br>
								<font color="#C8C8C8"> EJA</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO ESPECIAL</font></br>						
		-->														
								</div>
						  </div>
                          
                          
                          
                          <div class="panel panel-danger">
							<div class="panel-heading">
							  <h3 class="panel-title">Relat&oacute;rios (Documentos em PDF)</h3>
							</div>
								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->
								<div class="panel-body"></a><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
								</br>
								
							    <p>
							      <!-- incluirEd_infantil								
							    <a href="default.php?pg=<?php echo base64_encode("http://177.185.193.252/sgm/view/candidatos/incluirEd_infantil.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</a></br> -->						
							      <!--<font color="#C8C8C8"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</font></br>
                                -->
							      <!-- incluir CACAICS -->								
							      <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_CAMPO.php" target="_blank">QUADRO DE VAGAS ESCOLA DO CAMPO</a></a></br>	
							      
							      <!-- incluir ESCOLA S DO CAMPO -->								
							      <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_CCAIC.php" target="_blank">QUADRO DE VAGAS CCAIC</a></br>
                                   <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_transferencia_interna.php" target="_blank">QUADRO DE VAGAS DE TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS INTERNAS</a></a></br>	
							    </p>
							    <table class="table-responsive table-hover">
							      <tr>
							        <td colspan="2"><B>LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL(SORTEIO)</B></td>
						          </tr>
                                  <?php for($i=0;$i<$linha4;$i++){?> 
							      <tr>
							       <td width="72%"><a href="http://177.185.193.252/sgm/view/relatorios/ListaCandidatoSorteioAssinaturaCreche.php?idunidade_escolar=<?php echo mysql_result($rs4,$i,'ue.idunidade_escolar');?>" target="_blank"><?php echo mysql_result($rs4,$i,'ue.descricao');?></a></td>
							       <td width="28%"><a href="http://177.185.193.252/sgm/view/relatorios/ListaCandidatoSomente_Sorteados.php?idunidade_escolar=<?php echo mysql_result($rs4,$i,'ue.idunidade_escolar');?>" target="_blank"><B>Sorteados</B></a></td>
						          </tr>
                                  <? }?>
							      </table>
							    <p>
							      
					        </div></div>
							      <!-- incluir 1º ANO FUNDAMENTAL  -->
							      
							      <!--- <a href="http://177.185.193.252/sgm/view/relatorios/quadroVagas_Ed_Infantil_Sorteio.php" target="_blank">LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL(SORTEIO)</a></br>--><!-- PAINEL QUADRO DE VAGAS
                          
						  <div class="panel panel-info">
							  <div class="panel-heading">
									<h3 class="panel-title">Quadro Vagas</h3>
							</div>
								
								<div class="panel-body"><a href="#" target="_blank">
                               
                                <img src="img/quadro-vagas.png" border="0" class="img-responsive" /></a><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> 
								</div>
								
						  </div>
                          -->
							      
							      
							      </p>
							    <div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Atualiza&ccedil;&atilde;o de senha</h3>
								</div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&amp;form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/atualizar-senha.png" border="0" class="img-responsive" /></a></div>
								
	  </div>
</div>
              
              
              <!-- consulta protocolo -->
              
              <div class="col-md-6">
                  
                  <div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Pesquisar Protocolos</h3>
								</div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta_adm_protocolo.php");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>">CONSULTAR FICHAS</a></div>
								
	  </div>		
				 </div>
              
              
              
              
                        
                        <!-- PAINEL RELATÓRIOS E INSCRIÇÕES REALIZADAS 
<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Relatórios</h3>
								</div>
								
								<div class="panel-body">
                                
                                
                                <div class="container-fluid">
                                <div class="row-fluid centered">
                                <div class="centered">
                                <div class="col-md-6">
                                
                                 <center> <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 1° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/1distrito.png" border="0" class="img-responsive" /></a> </center></div>
                                
                                
                                <div class="col-md-6">
                                
                                  <center><a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 2° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/2distrito.png" border="0" class="img-responsive"/></a> </center></div>
                              </div></div></div>
                                
                                 <div class="container-fluid">
                                <div class="row-fluid centered">
                                <div class="centered">
                                <div class="col-md-6">
                                
                                 <center> <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 3° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/3distrito.png" border="0" class="img-responsive"/></a></center> </div>
                                
                                <div class="col-md-6">
                                
                                <center>  <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/4distrito.png" border="0" class="img-responsive"/></a></center> </div>
                                
                              
                                
                                <div class="col-md-6">
                                
                                <center>  <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/relatorio_ed_especial.png" border="0" class="img-responsive"/></a></center> </div>
                                
                                
                                
                                <div class="col-md-6">
                                
                                <center>  <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 4° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/relatorio_ed_infantil.png" border="0" class="img-responsive"/></a></center> </div>
                                
                              FIM RELATÓRIOS NOVOS -->
                                 
                                 
                  </div> 
                  
                  
                  
                  </div>
				<!-- fim container-->
						
				
               <!-- INSCRIÇÕES REALIZADAS
               					
  <div class="row-fluid">
                               
								<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Inscri&ccedil;&otilde;es Realizadas</h3>
								</div>
								
								<div class="panel-body">
								  <div class="panel-body">
								    <p><?php echo $linha4;?></a>
								      <!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> 
							        </p>
								    <p>
								      <?php if($linha4>0){?>
							        </p>
								    <div class="table-responsive">
                                   
								      <table class="table table-hover">
								        <tr class="active">
								          <td width="11%"><label class=" control-label" for="textinput">Protocolo</label></td>
								          <td><label class=" control-label" for="textinput">Nome</label></td>
								          <td><span class=" control-label">
								            <label class=" control-label" for="textinput">Unidade</label>
								            </span></td>
								          <td><label class=" control-label" for="textinput">Segmento</label></td>
								          <td><label class=" control-label" for="textinput">Ficha</label></td>
							            </tr>
								        <?php for($i=0;$i<$linha3;$i++){?>
								        <tr>
								          <td><?php echo @mysql_result($rs4,$i,'i.idinscricao');?></td>
								          <td width="22%"><?php echo @mysql_result($rs4,$i,'c.nome');?></td>
								          <td width="29%"><?php echo @mysql_result($rs4,$i,'ue.descricao');?></td>
								          <td width="23%"><?php echo @mysql_result($rs4,$i,'se.descricao');?></td>
								          <td width="15%"><a href="view/candidatos/ficha.php?&amp;id=<?php echo @mysql_result($rs3,$i,'c.idcandidatos');?>" target="_blank"><img src="img/imprimir.png" width="101" height="21" border="0" /></a></td>
							            </tr>
								        <?php }?>
							          </table>
							        </div>
								    <?php }else{

     echo "<b> Nenhuma inscrição realizada</b>";

    }

   ?>
							      </div>
                                  
                                 -->
								</div><!-- fim container-->
								
						  </div>
               </div>
				  </div>
                    
                    
                    </div>
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
