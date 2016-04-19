<?php

require_once('controles/publico.php');

Processo('publico');

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
			     <div class="col-md-4">
				   <div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Pré-inscrição de Matrícula</h3>									
								</div>
								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->
								<div class="panel-body"><img src="img/pre-inscricao.png" border="0" class="img-responsive" /></a><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
								</br>
								
							    <!-- incluir CACAICS -->
                                <?php if($_SESSION['tipo']=='CCAIC'){?>								
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_ccaic.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"> CCAIC</a></br>	   <?php }?>
                                
                                <!-- incluir ESCOLA S DO CAMPO -->
                                <?php if($_SESSION['tipo']=='ESCOLA_CAMPO'){?>										
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_escola_campo.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"> ESCOLAS DO CAMPO</a></br>	
                                <?php }?>
                         
                          <?php if($_SESSION['tipo']=='ESCOLA COMUM_TRANSFERENCIA_INTERNA'){?>		       							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_interna.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("2");?>"> TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS INTERNAS</a></br> <?php }?>
                                
                                
                                					
								<!--<font color="#C8C8C8"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO INFANTIL II (4 a 5 anos)</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO FUNDAMENTAL</font></br>
								<font color="#C8C8C8"> EJA</font></br>
								<font color="#C8C8C8"> EDUCAÇÃO ESPECIAL</font></br>						
					-->											
								</div>
				   </div>
                   </div>
                   
                   <div class="col-md-4">
				     <div class="panel panel-info">
							  <div class="panel-heading">
									<h3 class="panel-title">Atualiza&ccedil;&atilde;o de senha</h3>
				       </div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&amp;form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/atualizar-senha.png" border="0" class="img-responsive" /></a></div>
								
				   </div>
						</div></div>
                   <div class="row-fluid">
                     <div class="panel panel-info">
                       <div class="panel-heading">
                         <h3 class="panel-title">Inscri&ccedil;&otilde;es Realizadas Escolas</h3>
                       </div>
                       <div class="panel-body">
                         <div class="panel-body">
                           <p><label class=" control-label" for="textinput">Total: </label><?php echo $linha4;?></a>
                             <!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
                           </p>
                           <p>
                             <?php if($linha4>0){?>
                           </p>
                           <div class="table-responsive">
                             <table width="99%" class="table table-hover">
                               <tr class="active">
                                 <td width="8%"><label class=" control-label" for="textinput">Protoc.</label></td>
                                 <td><label class=" control-label" for="textinput">Nome</label></td>
                                 <td><span class=" control-label">
                                   <label class=" control-label" for="textinput">Unidade</label>
                                 </span></td>
                                 <td><label class=" control-label" for="textinput">Segmento</label></td>
                                 <td><label class=" control-label" for="textinput">Ficha</label></td>
                               </tr>
                               <?php for($i=0;$i<$linha4;$i++){?>
                               <tr>
                                 <td><p><?php echo @mysql_result($rs4,$i,'i.idinscricao');?></p></td>
                                 <td width="33%"><p><?php echo @mysql_result($rs4,$i,'c.nome');?></p></td>
                                 <td width="34%"><p><?php echo @mysql_result($rs4,$i,'ue.descricao');?></p></td>
                                 <td width="15%"><p><?php echo @mysql_result($rs4,$i,'se.descricao');?></p></td>
                                 <td width="10%"><a href="view/candidatos/ficha.php?&amp;id=<?php echo @mysql_result($rs4,$i,'c.idcandidatos');?>" target="_blank"><img src="img/imprimir.png" width="64" height="15" border="0" /></a></td>
                               </tr>
                               <?php }?>
                             </table>
                           </div>
                           <?php }else{

     echo "<b> Nenhuma inscrição realizada</b>";

    }

   ?>
                         </div>
                       </div>
                       <!-- fim container-->
                     </div>
                   </div>
                   
                   
                   <!-- ESCOLAS CCAIC -->
                   
                   
                   <div class="row-fluid">
                     <div class="panel panel-info">
                       <div class="panel-heading">
                         <h3 class="panel-title">Inscri&ccedil;&otilde;es Realizadas Escolas do Campo</h3>
                       </div>
                       <div class="panel-body">
                         <div class="panel-body">
                           <p><label class=" control-label" for="textinput">Total: </label><?php echo $linha5;?></a>
                             <!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
                           </p>
                           <p>
                             <?php if($linha5>0){?>
                           </p>
                           <div class="table-responsive">
                             <table width="100%" class="table table-hover">
                               <tr class="active">
                                 <td width="8%"><label class=" control-label" for="textinput">Protc.</label></td>
                                 <td><label class=" control-label" for="textinput">Nome</label></td>
                                 <td><span class=" control-label">
                                   <label class=" control-label" for="textinput">Unidade</label>
                                 </span></td>
                                 <td><label class=" control-label" for="textinput">Segmento</label></td>
                                 <td><label class=" control-label" for="textinput">Ficha</label></td>
                               </tr>
                               <?php for($i=0;$i<$linha4;$i++){?>
                               <tr>
                                 <td><?php echo @mysql_result($rs5,$i,'i.idinscricao');?></td>
                                 <td width="34%"><?php echo @mysql_result($rs5,$i,'c.nome');?></td>
                                 <td width="33%"><?php echo @mysql_result($rs5,$i,'ue.descricao');?></td>
                                 <td width="15%"><?php echo @mysql_result($rs5,$i,'se.descricao');?></td>
                                 <td width="10%"><a href="view/candidatos/ficha.php?&amp;id=<?php echo @mysql_result($rs5,$i,'c.idcandidatos');?>" target="_blank"><img src="img/imprimir.png" width="64" height="15" border="0" /></a></td>
                               </tr>
                               <?php }?>
                             </table>
                           </div>
                           <?php }else{

     echo "<b> Nenhuma inscrição realizada</b>";

    }

   ?>
                         </div>
                       </div>
                       <!-- fim container-->
                     </div>
                   </div>
                   
                   
                   
                   
                   
                   
			   </div></center></div>
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
