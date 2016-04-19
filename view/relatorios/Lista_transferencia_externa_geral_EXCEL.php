<?php

ob_start();  //inicia o buffer

require_once('../../controles/relatorios.php');

Processo('lista_Transferencia_externa_geral');

?>







<?php 

ob_start();  //inicia o buffer



$arquivo = 'Lista_transferencia_externa_geral_'.date('Y-m-d_H:i:s').'.xls';



// Configurações header para forçar o download

header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");

header ("Cache-Control: no-cache, must-revalidate");

header ("Pragma: no-cache");

header ("Content-type: application/x-msexcel");

header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );

header ("Content-Description: PHP Generated Data" );



?>







<body>

<center>

  <p align="center"><br/>

  <strong>ESTADO DO RIO DE JANEIRO </strong><br />

        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />

        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />

  </p>

  <p align="center" class="style1"><span class="style1"><strong>LISTA DE TRANSF&Ecirc;RENCIAS EXTERNAS</strong></span></p>

  <p align="center" class="style1">&nbsp;</p>

  <br />

  <br />

  <table width="99%" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">

    

    <tr>

      <td width="141" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong>DISTRITO</strong></td>

      <td width="82" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">SEGMENTO</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">U.E</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style24" style="border: 1px solid #000000;"><strong>NASC</strong></span></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">IDADE</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PROTOC.</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">ALUNO</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PAI</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">M&Atilde;E</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">RESPONS&Aacute;VEL</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">TEL.</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">CEL.</span></strong></td>

      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000; color: #000000;"><strong>ETAPA</strong></td>

    </tr>

  

   

    

    <!-- populando tabela -->

    

    

    <?php 

   

   for($i=0;$i<$linha;$i++){?>

     

    

 

    

    

    <tr>

      <td class="style31" style="border: 1px solid #000000;"><span class="style1" style="border: 1px solid #000000;"><?php echo utf8_decode($array[$i]['distrito']);?></span></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode($array[$i]['segmento']);?>

          </p>

        </center>

      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['unidade_escolar']);?></span></strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['nascimento']);?></span></strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['idade']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['protocolo']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode($array[$i]['aluno']);?>

          </p>

        </center>

      </strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['pai']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['mae']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['responsavel']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['telefone']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['celular']);?></span></strong></td>

      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode($array[$i]['etapa']);?></span></strong></td>

       <?php } ?>

    </tr>

     

    

  </table>

  <br />

  

  <?php 

    $html = ob_get_clean();	 

	$html = utf8_encode($html);

	echo $html;

exit;

?>

</center>

  </body>



  



