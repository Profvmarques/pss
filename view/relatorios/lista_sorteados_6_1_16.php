<?php

ob_start();  //inicia o buffer

require_once('../../controles/relatorios.php');

Processo('lista_sorteados');

?>

<style type="text/css">

<!--

.style1 {font-size: 16px}

.style23 {font-size: 18px; font-weight: bold; }

.style24 {font-size: 18px}

.style31 {

	font-size: 22px;

	font-weight: bold;

}

.style32 {font-size: 22px}

.style33 {font-size: 36px; font-weight: bold; }

.style34 {

	font-size: 20px;

	font-weight: bold;

}

-->

</style>

<body>

<center>

  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>

  <strong>ESTADO DO RIO DE JANEIRO </strong><br />

        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />

        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />

  </p>

  <p align="center" class="style1"><span class="style1"><strong>LISTA DE SORTEADOS </strong></span></p>

  <br />

  <br />

  <?php if($linha>0){?>

  <table width="90%" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">

    <tr>

      <td colspan="6" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><center><b><?php echo @mysql_result($rs,0,'ue.descricao');?><b></center></td>

    </tr>

    <tr>

      <td colspan="6" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;">&nbsp;</td>

    </tr>

    <tr>

      <td width="120" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">SEGMENTO</span></strong></td>

      <td width="120" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PROTOCOLO</span></strong></td>

      <td width="56" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">NOME </span></strong></td>

      <td width="120" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">M&Atilde;E</span></strong></td>

      <td width="56" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">RESPONS&Aacute;VEL</span></strong></td>

      <td width="56" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;">&nbsp;</td>

    </tr>

    <!-- populando tabela -->

    <?php 

   

   for($i=0;$i<$linha;$i++){?>

    <tr>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong> <?php echo @mysql_result($rs,$i,'se.descricao');?> </strong></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'i.idinscricao'));?></p>

        </center>

      </strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.nome'));?></p>

        </center>

      </strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.mae'));?></p>

        </center>

      </strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.responsavel'));?></p>

        </center>

      </strong></span></td>

      <td class="style33" style="border: 1px solid #000000;"><a href="../candidatos/ficha.php?id=<?php echo mysql_result($rs,$i,'i.idinscricao');?>" target="_blank"><img src="../../img/lista.png" width="24" height="24" /></a></td>

      <?php } ?>

    </tr>

  </table>

  <?php }else{?>

  <B>Nenhum registro encontrado!</B>

  <?php }?>

  <br />

</center>

  </body>



  

<?php 

/*$html = ob_get_clean();

	// pega o conteudo do buffer, insere na variavel e limpa a memória

	 

	$html = utf8_encode($html);

	// converte o conteudo para uft-8

	

	

	define('MPDF_PATH', '../../classes/mpdf/');

	include(MPDF_PATH.'mpdf.php');

	// inclui a classe

		

	$mpdf = new mPDF();

	// cria o objeto

	//$mpdf->AddPage(); 

	$mpdf->allow_charset_conversion=true;

	// permite a conversao (opcional)

	$mpdf->charset_in='UTF-8';

	// converte todo o PDF para utf-8

	$mpdf->SetDisplayMode('fullpage');

	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/SMEDC');

	 

	$mpdf->WriteHTML($html);

	// escreve definitivamente o conteudo no PDF

	 

	$mpdf->Output();

	// imprime

	 

exit();  */  

?> 

