<?php

require_once('controles/publico.php');

Processo('publico');

?>

<style type="text/css">

<!--

.style1 {color: #006633}

-->

</style>







<!--
			 <form class="form-horizontal" role="form"> 
					-->
					<!--DADOS GERAIS -->
					
					
				<div class="container">
                <center>
			   <div class="row-fluid">
					    <div class="col-md-8">
						  <div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Pr&eacute;-Incri&ccedil;&atilde;o de Matr&iacute;cula (Segunda Etapa)</h3>									
								</div>
								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&amp;form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&amp;ti=<?php echo base64_encode("1");?>"><img src="img/pre-inscricao.png" border="0" class="img-responsive" /></a></div>
								
						  </div>
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Pr&eacute;-Incri&ccedil;&atilde;o de Transfer&ecirc;ncia (Segunda Etapa)</h3>
								</div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&amp;form=<?php echo base64_encode("Transfer&ecirc;ncia de Aluno");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/transferencia.png" border="0" class="img-responsive"/></a></div>
								
							</div>
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Atualiza&ccedil;&atilde;o de senha</h3>
								</div>
								
								<div class="panel-body"><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							    <a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&amp;form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/atualizar-senha.png" border="0" class="img-responsive" /></a></div>
								
							</div>
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Inscri&ccedil;&otilde;es Realizadas</h3>
								</div>
								
								<div class="panel-body">
								  <p><a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&ti=<?php echo base64_encode("2");?>"><img src="img/signin.png" width="34" height="33" class="img-responsive"/><?php echo $linha3;?></a><!--								
									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->
							      </p>
								  <p>
                                    <?php if($linha3>0){?>
                                  </p>
                                  <div class="table-responsive">
								  <table class="table table-hover">
								    <tr class="active">
								      <td><label class=" control-label" for="textinput">Protocolo</label></td>
								      <td colspan="2"><label class=" control-label" for="textinput">Nome</label></td>
							        </tr>
								    <?php for($i=0;$i<$linha3;$i++){?>
								    <tr>
								      <td><?php echo @mysql_result($rs3,$i,'i.idinscricao');?></td>
								      <td><?php echo @mysql_result($rs3,$i,'c.nome');?></td>
								      <td><a href="view/candidatos/ficha2.php?&amp;id=<?php echo @mysql_result($rs3,$i,'c.idcandidatos');?>" target="_blank"><img src="../../img/imprimir.png" width="101" height="21" border="0" /></a></td>
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
						</div>