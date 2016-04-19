<?php

require_once('controles/publico.php');

Processo('publicoGestao');

?>

<style type="text/css">

<!--

.style1 {color: #006633}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {color: #FFFFFF}
.style4 {
	color: #FF0033;
	font-weight: bold;
	font-size: 24px;
}

-->

</style>

<!-- adriano -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"></script>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap localmente-->






<div class="container-fluid">


<div class="row"> <!-- primeira coluna-->
  <div class="col-md-6">


<div class="box">

<h2>Pr&eacute;-inscri&ccedil;&atilde;o de Matr&iacute;cula (Segunda Etapa) </h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>"><img src="img/clique_aqui.png" border="0" class="img-responsive" /></a></p>

    </div>

</div>

<div class="box">

<h2>Pr&eacute;-Incri&ccedil;&atilde;o de Transfer&ecirc;ncia (Segunda Etapa)</h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir.php");?>&form=<?php echo base64_encode("Transfer&ecirc;ncia de Aluno");?>&ti=<?php echo base64_encode("2");?>"><img src="img/clique_aqui2.png" border="0" class="img-responsive"/></a></p>

    </div>

</div>

<div class="box">

<h2>Quadro Vagas </h2>

    <div class="content-box">

      <p><a href="view/relatorios/quadroVagasEtapa2.php" target="_blank"><img src="img/quadroVagas.png" border="0" class="img-responsive" /></a></p>
    </div>

</div>


<div class="box">

<h2>Atualiza&ccedil;&atilde;o de Senha </h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&ti=<?php echo base64_encode("2");?>"><img src="img/atulizacao_senha.png" border="0" class="img-responsive"/></a></p>

    </div>

</div>


</div><!-- fim da coluna-->




  <div class="col-md-6">

<div class="box">

<h2>Relat&oacute;rios</h2>

    <div class="content-box">
<center>
        <div class="table-responsive">
          <table class="table">
          <tr>
            <td><center>
              <span class="style4">Pr&eacute;-inscri&ccedil;&atilde;o  da 2° etapa (%) </span>
            </center></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><center>
              <a href="default.php?pg=<?php echo base64_encode("view/relatorios/chartDistritoEnsino.php");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 1° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/distrito1.png" border="0" class="img-responsive" /></a>
            </center></td>
          </tr>
          <tr>
            <td><center>
                <a href="default.php?pg=<?php echo base64_encode("view/relatorios/chartDistritoEnsino2.php");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 2° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/distrito2.png" border="0" class="img-responsive"/></a>
            </center></td>
          </tr>
          <tr>
            <td><center>
                <a href="default.php?pg=<?php echo base64_encode("view/relatorios/chartDistritoEnsino3.php");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 3° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/distrito3.png" border="0" class="img-responsive"/></a>
            </center></td>
          </tr>
          <tr>
            <td><center>
                <a href="default.php?pg=<?php echo base64_encode("view/relatorios/chartDistritoEnsino4.php");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 4° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/distrito4.png" border="0" class="img-responsive"/></a>
            </center></td>
          </tr>
        </table>
        </div>
        
	  </center>
        <p>&nbsp;</p>

  </div>

</div>



<div class="box">

<h2>Inscri&ccedil;&otilde;es Realizadas </h2>

    <div class="content-box">

	<?php if($linha3>0){?>
    
    <div class="table-responsive">
        <table class="table">
    
	
      <tr>
        <td width="183" bgcolor="#13344E"><span class="style2">Ensino </span></td>
        <td bgcolor="#13344E">        <center class="style3">
          <span class="style3"><strong>Inscritos</strong></span>
        </center>        </td>
        <td colspan="2" bgcolor="#13344E">        <center class="style3">
          <span class="style3"><strong>Tipo</strong></span>
        </center>        </td>
      </tr>
      <?php for($i=0;$i<$linha3;$i++){?>
      <tr>
        <td><?php echo @utf8_encode(mysql_result($rs3,$i,'ts.descricao'));?></td>
        <td width="93"><center><?php echo @mysql_result($rs3,$i,'total');?></center></td>
        <td width="126"><center>Pr&eacute;-inscri&ccedil;&atilde;o</center></td>
        <td width="46"><a href="view/candidatos/ficha2.php?&amp;id=<?php echo @mysql_result($rs3,$i,'c.idcandidatos');?>" target="_blank">Lista</a></td>
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



<div class="box">

  <h2>Total de Vagas Oferecidas </h2>

  <div class="content-box">

    <p><b>Pr&eacute;-inscri&ccedil;&atilde;o de Matr&iacute;cula<b></p>

    <?php for($i=0;$i<$linha;$i++){?>

    <p class="style1"><?php echo utf8_encode( mysql_result($rs,$i,'ts.descricao'))."  : ". mysql_result($rs,$i,'total');?></p>

    <?php }?>

    <br />

    <p><b>Pr&eacute;-Incri&ccedil;&atilde;o de Transfer&ecirc;ncia<b></p>

    <?php for($i=0;$i<$linha2;$i++){?>

    <p class="style1"><?php echo utf8_encode(mysql_result($rs2,$i,'ts.descricao'))."  : ". mysql_result($rs2,$i,'total');?></p>

    <?php }?>

  </div>

</div>


</div>

</div><!-- fim da linha-->
</div><!-- fim da coluna-->
