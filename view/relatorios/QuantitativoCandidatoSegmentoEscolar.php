<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('relQuantitativoCandidatoSE');
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
  <p align="center" class="style1"><span class="style23">RELAT&Oacute;RIO DE PR&Eacute;-INSCRI&Ccedil;&Otilde;ES DE MATR&Iacute;CULAS POR SEGMENTO ESCOLAR </span></p>
  <br />
  <br />
  <table width="1158">
    <tr>
      <td width="295" bgcolor="#CCCCCC" class="style23"><div align="center">
        <center>
          SEGMENTO ESCOLAR
        </center>
      </div></td>
      <td width="568" bgcolor="#CCCCCC" class="style23"><div align="center"><center>
        UNIDADE ESCOLAR 
      </center></div></td>
      <td width="279" bgcolor="#CCCCCC" class="style23"><center>
        TOTAL DE INSCRITOS 
      </center></td>
    </tr>
	<?php for($i=0;$i<$linha;$i++){?>
    <tr>
      <td class="style23"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'se.descricao'));?></strong></td>
      <td class="style23"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'ue.descricao'));?></strong></td>
      <td class="style23"><center><?php echo @mysql_result($rs,$i,'total');?></center></td>
    </tr>
	<?php  
	 $total+=@mysql_result($rs,$i,'total');
	
	}?>
    <tr>
      <td colspan="3" class="style23"><center>
          TOTAL DE REGISTROS : <strong><?php echo $total;?></strong>
      </center></td>
    </tr>
  </table>
  <br />
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
	 //$mpdf->AddPage('L'); 
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
