<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('listaInscrIndevUeSe');
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
  <p align="center" class="style1"><span class="style23">LISTA DE PR&Eacute;-INSCRI&Ccedil;&Otilde;ES  DE MATR&Iacute;CULAS INDEVIDAS DA EDUCA&Ccedil;&Atilde;O INFANTIL </span></p>
  <br />
  <br />
  <table width="900">
   
    <tr>

      <td width="243" bgcolor="#CCCCCC" class="style24"><strong>UNIDADE ESCOLAR</strong></td>
      <td colspan="2" bgcolor="#CCCCCC" class="style23"><div align="center"><center>
        SEGMENTO ESCOLAR 
      </center></div></td>
      <td width="370" colspan="2" bgcolor="#CCCCCC" class="style23"><div align="center"><center>
      NOME </center></div></td>
    </tr>
	<?php for($i=0;$i<$linha;$i++){?>
    <tr>
    
      <td class="style24"><strong><span class="style23"><strong><?php echo @mysql_result($rs,$i,'unidade_escolar.descricao');?></strong></span></strong></td>
      <td colspan="2" class="style23"><div align="center"><strong><center><?php echo @mysql_result($rs,$i,'candidatos.idade');?></center></strong></div></td>
      <td colspan="2" class="style23"><span class="style24"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'candidatos.nome'));?></strong></span></td>
    </tr>
	<?php }?>
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
	 $mpdf->AddPage('P'); 
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
