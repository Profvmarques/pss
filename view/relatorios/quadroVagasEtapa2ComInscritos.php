<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('quadroVagasEtapa2');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style23 {font-size: 18px; font-weight: bold; }
.style24 {font-size: 18px}
.style26 {font-size: 12px; }
-->
</style>
</head>
<body>
<center>
  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
  <strong>ESTADO DO RIO DE JANEIRO </strong><br />
        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />
  </p>
  <p align="center" class="style1">&nbsp;</p>
  <p align="center" class="style1"><span class="style23">QUADRO DE VAGAS X INSCRITOS DA ETAPA II </span></p>
  <br />
  <br />
  <table width="1294">
    <tr>
      <td colspan="9" class="style24">&nbsp;</td>
    </tr>
    <tr>
      <td width="111" bgcolor="#CCCCCC" class="style24"><strong>DISTRITO</strong></td>
      <td width="295" bgcolor="#CCCCCC" class="style24"><strong>UNIDADE ESCOLAR </strong></td>
      <td width="276" bgcolor="#CCCCCC" class="style24"><strong>ENSINO</strong></td>
      <td colspan="2" bgcolor="#CCCCCC" class="style23"><div align="center"><center>
        SEGMENTO
      </center></div></td>
      <td width="160" bgcolor="#CCCCCC" class="style23"><div align="center"><center>
        VAGAS 
      </center></div></td>
      <td width="155" bgcolor="#CCCCCC" class="style23"><div align="center">
        <center>
          DISPON&Iacute;VEIS 
        </center>
      
        
        </div></td>
      <td width="155" bgcolor="#CCCCCC" class="style23"><div align="center">
          <center>
            INSCRITOS
          </center>
      </div></td>
      <td width="155" bgcolor="#CCCCCC" class="style23"><div align="center">
          <center>
            SITUA&Ccedil;&Atilde;O
          </center>
      </div></td>
    </tr>
	<?php for($i=0;$i<$linha;$i++){?>
    <tr>
      <td class="style24"><strong><center>
        <strong><?php echo utf8_decode(@mysql_result($rs,$i,'d.iddistrito'));?></strong>
      </center></strong></td>
      <td class="style24"><strong><center>
        <strong><?php echo utf8_decode(@mysql_result($rs,$i,'ue.descricao'));?></strong>
      </center></strong></td>
      <td class="style24"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'ts.descricao'));?></strong></td>
      <td colspan="2" class="style23"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'se.descricao'));?></strong></td>
      <td class="style23"><div align="center"><strong>
        <center>
          <strong><?php echo utf8_decode(@mysql_result($rs,$i,'v.totalvagas'));?></strong>
        </center>
      </strong></div></td>
      <td class="style23"><div align="center"><strong>
        <center>
          <strong><strong><?php echo utf8_decode(@mysql_result($rs,$i,'v.remanescente'));?></strong></strong>
        </center>
      </strong></div></td>
      <td class="style23"><div align="center"><strong>
          <center>
            <strong><strong><?php echo utf8_decode(@mysql_result($rs,$i,'TotalInscritos'));?></strong></strong>
          </center>
      </strong></div></td>
      <td class="style23"><div align="center"><strong>
          <center>
            <strong><strong><?php echo utf8_decode(@mysql_result($rs,$i,'situacao'));?></strong></strong>
          </center>
      </strong></div></td>
    </tr>
	<?php }?>
  </table>
  <br />
</center>
  </body>
  </html>
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
	 $mpdf->AddPage('L'); 
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
