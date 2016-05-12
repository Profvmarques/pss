<?php
ob_start(); 
require_once('../../controles/relatorios.php');
Processo('listaCargoSuperiorIgual');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
<style type="text/css">
.style11 {font-size: 16px; text-transform:uppercase;}
.style11 {font-size: 16px; text-transform:uppercase;}
</style>
</head>
<script src="../../js/Validacaoform.js"></script>
<style type="text/css">
.style1 {font-size: 14px; text-transform:uppercase;}

.style23 {font-size: 17px; font-weight: bold; }

.style24 {font-size: 15px}

.style31 {

	font-size: 20px;

	font-weight: bold;

}

.style32 {font-size: 20px}

.style33 {font-size: 33px; font-weight: bold; }

.style34 {

	font-size: 20px;

	font-weight: bold;

}
.style33 strong .style1 {
	text-align: center;
}
.center{ text-align:center; }
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
  <br /><br /><br />
  <p class='center'><b>EDITAL DE INSCRI&Ccedil;&Otilde;ES DE CANDIDATOS COM NOTA 7 (SETE) OU SUPERIOR</b></p>
  <br /><br />
  <p class='center'><b>PROCESSO SELETIVO SIMPLIFICADO N&ordm;. 001/2016 &ndash; EDITAL N&ordm;. 003/2016</b></p>
  <br /><br /><br />
  <p align="justify">A Comiss&atilde;o Regulamentadora do Processo Seletivo Simplificado n&ordm;. 001/2016, Edital n&ordm;. 003/2016,

designada atrav&eacute;s da Portaria n&ordm;. 022/2016/PRES-FUNDEC, no uso das suas atribui&ccedil;&otilde;es legais,

relaciona os candidatos que obtiveram nota 7 (sete) ou superior possibilitando a passagem

para a segunda fase, quando dever&atilde;o comparecer para entrevista em data e hora a ser

divulgado no local informado no item 7.1.2.2, munido da documenta&ccedil;&atilde;o comprobat&oacute;ria prevista no item 8

do Edital n&ordm; 003/2016 em envelope lacrado que ser&aacute; aberto na presen&ccedil;a do candidato.</p>
  <br /><br /><br />
  <p class='center'>Duque de Caxias, 12 de maio de 2016.</p>
  <p class='center'>Comiss&atilde;o Regulamentadora do Processo Seletivo Simplificado Portaria n&ordm;. 022-2016/PRES/FUNDEC</p>
  
  
  
  
  <p align="center">&nbsp;</p>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

  <p align="center" class="style1"><span class="style1"><strong>PUBLICA&Ccedil;&Atilde;O PR&Eacute;VIA DAS INSCRI&Ccedil;&Otilde;ES Aprovadas PARA a entrevista</strong></span></p>

  

   <?php if($linha>0){?>
   <center>
     <table width="88%" border="1" cellpadding="2" cellspacing="0" style="border: 0.3px solid #000000;" align="center">
       <?php 
 for ($i = 0; $i < $linha; $i++) {	
	if($array[$i]['cargo']!='' && $array[$i]['total']>0 && $array[$i]['total']<= $linha) {?>
       <tr style="color:#fff">
         <td colspan="4" bgcolor="#ccc" class="style24" style="border: 0.3px solid #"><center>
           <b><?php echo (@mysql_result($rs,$i,'c.descricao'));?><b>
         </center></td>
       </tr>
       <tr style="color:#fff">
         <td width="22%" bgcolor="#ccc" class="style24" style="border: 1px solid #000000;"><center>
           <strong><span class="style1">INSCRI&Ccedil;&Atilde;O</span></strong>
         </center></td>
         <td width="55%" bgcolor="#ccc" class="style24" style="border: 1px solid #000000;"><strong><span class="style11">NOME</span></span></strong></td>
         <td width="23%" bgcolor="#ccc" class="style24" style="border: 1px solid #000000;"><strong><span class="style11">PONTUA&Ccedil;&Atilde;O</span></strong></td>
       </tr>
       <?php }
 ?>
       <!-- populando tabela -->
       <tr>
         <td class="style33" style="border: 1px solid #000000;" align="center"><span class="style34"><strong>
           <p class="style1"><?php echo html_entity_decode(@mysql_result($rs,$i,'i.idinscricao'));?></p>
         </strong></span></td>
         <td class="style33" style="border: 1px solid #000000;" align="left"><strong><span class="style1"><?php echo html_entity_decode(@mysql_result($rs,$i,'i.nome'));?></span></strong></td>
         <td class="style33" style="border: 1px solid #000000;" align="center"><strong><span class="style1"><?php echo html_entity_decode(@mysql_result($rs,$i,'i.pontos'));?></span></strong></td>
       </tr>
       <?php }
	  
	   ?>
     
     </table>
   </center> 
<?php }
	  
	  ?>

</form>
  </body>

</htmL>

  

<?php 

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

	$mpdf->charset_in='utf-8';

	// converte todo o PDF para utf-8

	$mpdf->SetDisplayMode('fullpage');

	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/FUNDEC');

	 

	$mpdf->WriteHTML($html);

	// escreve definitivamente o conteudo no PDF

	 

	$mpdf->Output();

	// imprime

	 

exit();  

?> 

