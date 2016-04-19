<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('fichaCandidato');
?>
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style23 {font-size: 18px; font-weight: bold; }
.style24 {font-size: 18px}
.style26 {font-size: 12px; }
-->
</style>
<body>
<center>
  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
  <strong>ESTADO DO RIO DE JANEIRO </strong><br />
        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />
  </p>
  <p align="center" class="style1">&nbsp;</p>
  <p align="center" class="style1"><span class="style23">RELATÓRIO DE PRÉ-INSCRIÇÕES DE MATRÍCULAS </span></p>
  <br />
<br />
  <table width="1101">
    <tr>
      <td colspan="5" class="style24"><strong>UNIDADE PÓLO : </strong></td>
    </tr>
    <tr>
      <td colspan="5" class="style24">&nbsp;</td>
    </tr>
    <tr>
      <td width="125" class="style24"><strong>PROOCOLO</strong></td>
      <td width="351" class="style24"><strong>NOME</strong></td>
      <td width="79" class="style23">IDADE</td>
      <td width="277" class="style23"><strong>ENSINO</strong></td>
      <td width="245" class="style23">SEGMENTO ESCOLAR </td>
    </tr>
    <tr>
      <td class="style24"><strong><?php echo @mysql_result($rs,0,'ts.descricao');?></strong></td>
      <td class="style24">&nbsp;</td>
      <td class="style23">&nbsp;</td>
      <td class="style23">&nbsp;</td>
      <td class="style23">&nbsp;</td>
    </tr>
  </table>
  <br />
  <p class="style26">&nbsp;</p>
</center>
  </body>
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
	 
exit();
?> 
