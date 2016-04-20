<?php
require_once('controles/publico.php');
Processo('publico');
?>
<style type="text/css">
<!--
.style1 {color: #006633}
-->
</style>

<!-- códigos para modal-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>   
  /*$(document).ready(function() {
   $('#myModal').modal('show');
  });  */ 
  </script>
  
   
  <style>
  .modal-header, h4, .close {
      background-color: #DDD;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #DDD;
  }  
  
  </style>
  
<div class="container">

  <div class="modal fade" id="oomyModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal conteúdo-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          
          <center><img src="img/logo.png" class="img-responsive"></center>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
		            
                    <h3 align="justify">
					<p align="center"><b>MATR&Iacute;CULA SEM FILA 2016</b></p>
					
                    
                    <div>
                                       
                    <h2 class="alert alert-danger" align="center">ATEN&Ccedil;&Atilde;O</h2>
                    <p></p>
                     <h3 align="justify">
                     <font color="#FF0000">
                     <b>Prezado Respons&aacute;vel, se o candidato j&aacute; est&aacute; inscrito na PRIMEIRA FASE, n&atilde;o h&aacute; a necessidade de uma nova inscri&ccedil;&atilde;o, pois caso ocorra uma nova inscri&ccedil;&atilde;o a mesma ser&aacute; desconsiderada.</b>
                     </font>
                    </h3>
                     
                     
                     </div>
                    
                    <br>
		            <center><a href="http://192.95.8.216/~pmdcsmen/sgm/Calendario_atualizado_11_01_2016_Matricula_Sem_Fila_2016.pdf" target="_blank">EDITAL</a></center> 
					
					</h3>					
                    
		            
                
              
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
  <!-- FIM Modal conteúdo-->





								</div>
                    
                    
                    </div>
                    </div>

                    <!--fim da nova estrtura -->

                    <strong><div class="container">

                	<center>
                	<div class="col-md-5">

                    <div class="panel panel-primary">

								<div class="panel-heading">

                    

                    <h3 class="panel-title">ATUALIZAÇÃO DE SENHA</h3>

					  </div>

								

								<div class="panel-body"><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->

							    <a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&amp;form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/atualizar-senha.png" border="0" class="img-responsive" /></a>

                    

                    </div><!--FIM COLUNA -->

                    

                      </div>
                      </div><!--FIM LINHA -->

                      

                 

                    
<div class="col-md-5">
                    <div class="panel panel-primary">

								<div class="panel-heading">

                    

                    <h3 class="panel-title">ATUALIZE OU IMPRIMA SUA FICHA</h3>

					  </div>

								

								<div class="panel-body">

								 
								  <p>&nbsp;</p>

                                  <div class="table-responsive">

								  <table width="99%" class="table table-hover">

								    <tr class="active">

								      <td width="26%"><label class=" control-label" for="textinput">INSCRIÇÃO</label></td>

								      <td width="47%"><b>CARGO</b></td>
								      <td width="27%" colspan="2">&nbsp;</td>
							        </tr>

								    
								    <tr>

								      <td><?php echo "000".@mysql_result($rs,$i,'i.idinscricao');?></td>

								      <td><?php echo @mysql_result($rs,$i,'c.descricao');?></td>
								      <td><a href="view/candidatos/ficha.php?id=<?php echo @mysql_result($rs,$i,'i.idinscricao');?>" target="_blank"><img src="img/lista.png" width="101" height="21" border="0" /></a></td>
								      <td>&nbsp;
<a href="default.php?pg=<?php echo base64_encode("view/candidatos/editar.php");?>&id=<?php echo @mysql_result($rs,$i,'i.idinscricao');?>" >Editar</a></td>

							        </tr>

								   

							      </table>

                                  </div>
					  </div>

                    

                    </div>
                    </div><!--FIM LINHA -->

                    

                    </div><!--FIM CONTAINER -->

                    

                    

                    

                    

           