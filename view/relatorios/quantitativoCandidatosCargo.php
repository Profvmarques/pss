<?php
ob_start(); 
require_once('../../controles/relatorios.php');
Processo('listaGeralCargoSuperiorIgual');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
</head>
<script src="../../js/Validacaoform.js"></script>
<style type="text/css">
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
.style33 strong .style1 {
	text-align: center;
}

-->

</style>

<body>
<form class="form-horizontal"  id="form" name="form" method="post">

<center>

  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>

  <strong>ESTADO DO RIO DE JANEIRO </strong><br />

        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA, CI&Ecirc;NCIA, TECNOLOGIA, ESPORTE, LAZER, CULTURA E POL&Iacute;TICAS SOCIAIS DE DUQUE DE CAXIAS</strong><br />

  </p>
  <p align="center">&nbsp;</p>

  <p align="center" class="style1"><span class="style1"><strong>QUANTITATIVO DE CANDIDATOS POR CARGO</strong></span></p>

  <br />

  <br />
   <?php if($linha>0){?>
  <table width="75%" border="1" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    <?php 
 for ($i = 0; $i < $linha; $i++) {	
	if($array[$i]['cargo']!='' && $array[$i]['total']>0 && $array[$i]['total']<= $linha) {?>
    <tr style="color:#fff">

      <td colspan="5" bgcolor="#337ab7" class="style24" style="border: 1px solid #">
      <center><b><?php echo utf8_encode(@mysql_result($rs,$i,'c.descricao'));?><b></center>

    </tr>

    <tr style="color:#fff">

      <td width="121" bgcolor="#337ab7" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">INSCRI</span>&Ccedil;&Atilde;O</strong></td>

      <td width="338" bgcolor="#337ab7" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">NOME</span></strong></td>
      <td width="351" bgcolor="#337ab7" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">NASCIMENTO</span><span class="style1"> </span></strong></td>

      <td width="164" bgcolor="#337ab7" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PONTUA</span>&Ccedil;&Atilde;O<span class="style1"></span></strong></td>

      </tr>
       <?php }
 ?>

    <!-- populando tabela -->

   
    <tr>

   
 

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong> <?php echo "000".@mysql_result($rs,$i,'i.idinscricao');?> </strong></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo @mysql_result($rs,$i,'i.nome');?></p>

        </center>

      </strong></span></td>
      <td class="style1">
	  <p class="style1"><center><?php echo utf8_decode(@mysql_result($rs,$i,'dtnasc'));?></center>
      </p></td>

      <td align="left" class="style33" style="text-align: left"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'i.pontos'));?></span></strong></td>

   
    </tr>
    <?php }
	  
	   ?>
    <tr>
      <td colspan="4" class="style33" style="border: 1px solid #000000;"><?php echo "Total de inscritos: ".$linha;?></td>
      </tr>

</table>
 
<?php }
	  
	  ?>
</center>
</form>
  </body>

</htmL>

  

<?php 
/*
$html = ob_get_clean();

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

	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/FUNDEC');

	 

	$mpdf->WriteHTML($html);

	// escreve definitivamente o conteudo no PDF

	 

	$mpdf->Output();

	// imprime

	 

exit();  */

?> 

