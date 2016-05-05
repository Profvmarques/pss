<?php
ob_start(); 
require_once('../../controles/relatorios.php');
Processo('listaHomologacaoPrevia');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
</head>
<script src="../../js/Validacaoform.js"></script>
<style type="text/css">
.style1 {font-size: 16px; text-transform:uppercase;}

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
  <p class='center'><b>EDITAL DE HOMOLOGA&Ccedil;&Atilde;O DAS INSCRI&Ccedil;&Otilde;ES</b></p>
  <br /><br />
  <p class='center'><b>PROCESSO SELETIVO SIMPLIFICADO N&ordm;. 001/2016 &ndash; EDITAL N&ordm;. 003/2016</b></p>
  <br /><br /><br />
  <p>A Comiss&atilde;o Regulamentadora do Processo Seletivo Simplificado n&ordm;. 001/2016, Edital n&ordm;. 003/2016, designada atrav&eacute;s da Portaria n&ordm;. 022/2016/PRES/FUNDEC, no uso das suas atribui&ccedil;&otilde;es legais, de acordo com o Decreto Municipal n&ordm;. 5.537/2009, resolve homologar todas as inscri&ccedil;&otilde;es dos candidatos.</p>
  <br /><br /><br />
  <p class='center'>Duque de Caxias,05 de maio de 2016.</p>
  <p class='center'>Comiss&atilde;o Regulamentadora do Processo Seletivo Simplificado Portaria n&ordm;. 022-2016/PRES/FUNDEC</p>
  
  
  
  
  <p align="center">&nbsp;</p>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

  <p align="center" class="style1"><span class="style1"><strong>PUBLICA&Ccedil;&Atilde;O PR&Eacute;VIA DA HOMOLOGA&Ccedil;&Atilde;O DAS INSCRI&Ccedil;&Otilde;ES</strong></span></p>

  <br />

  <br />
   <?php if($linha>0){?>
   <center>
  <table width="88%" border="1" cellpadding="2" cellspacing="0" style="border: 0.3px solid #000000;" align="center">
    <?php 
 for ($i = 0; $i < $linha; $i++) {	
	if($array[$i]['cargo']!='' && $array[$i]['total']>0 && $array[$i]['total']<= $linha) {?>
    <tr style="color:#fff">

      <td colspan="2" bgcolor="#ccc" class="style24" style="border: 0.3px solid #">
      <center><b><?php echo (@mysql_result($rs,$i,'c.descricao'));?><b></center>

    </tr>

    <tr style="color:#fff">
      <td bgcolor="#ccc" class="style24" style="border: 1px solid #000000;"><center><strong><span class="style1">CANDIDATOS</span></strong></center></td>
      </tr>
       <?php }
 ?>

    <!-- populando tabela -->

   
    <tr>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        
        
          
          <p class="style1"><?php echo html_entity_decode(@mysql_result($rs,$i,'i.nome'));?></p>
          
          
        
      </strong></span></td>

      </tr>
    <?php }
	  
	   ?>
    <tr>
      <td class="style33" style="border: 1px solid #000000;"><?php echo "Total de inscritos: ".$linha;?></td>
      </tr>

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

