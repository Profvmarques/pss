<?php

require_once('controles/publico.php');

Processo('publico');

?>

<style type="text/css">

<!--

.style1 {color: #006633}

-->

</style>







<div class="box">

<h2>Pr&eacute;-inscri&ccedil;&atilde;o de Matr&iacute;cula (Segunda Etapa) </h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>"><img src="img/clique_aqui.png" border="0" /></a></p>

    </div>

</div>



<div class="box">

<h2>Pr&eacute;-Incri&ccedil;&atilde;o de Transfer&ecirc;ncia (Segunda Etapa)</h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&form=<?php echo base64_encode("Transfer&ecirc;ncia de Aluno");?>&ti=<?php echo base64_encode("2");?>"><img src="img/clique_aqui2.png" border="0" /></a></p>

    </div>

</div>



<div class="box">

<h2>Atualiza&ccedil;&atilde;o de Senha </h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&ti=<?php echo base64_encode("2");?>"><img src="img/atulizacao_senha.png" border="0" /></a></p>

    </div>

</div>



<div class="box">

<h2>Inscri&ccedil;&otilde;es Realizadas &nbsp;<?php echo $linha3;?></h2>

    <div class="content-box">

	<?php if($linha3>0){?> 

      <table>

  <tr>

    <td width="73"><strong>Protocolo</strong></td>

    <td colspan="2"><strong>Nome</strong></td>

    </tr>

	 <?php for($i=0;$i<$linha3;$i++){?>

  <tr>

    <td><?php echo @mysql_result($rs3,$i,'i.idinscricao');?></td>

    <td><?php echo @mysql_result($rs3,$i,'c.nome');?></td>

    <td width="180"><a href="view/candidatos/ficha2.php?&amp;id=<?php echo @mysql_result($rs3,$i,'c.idcandidatos');?>" target="_blank"><img src="img/imprimir_ficha.png" width="175" height="37" border="0" /></a></td>

  </tr>

  <?php }?>

</table>

 

   <?php }else{

     echo "<b> Nenhuma inscrição realizada</b>";

    }

   ?> 

   

   

    </div>

</div>


