<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('listaCandidatoEd_especial');
?>
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style23 {font-size: 18px; font-weight: bold; }
.style24 {font-size: 18px}
.style32 {font-size: 22px}
.style33 {font-size: 36px; font-weight: bold; }
.style31 {	font-size: 22px;
	font-weight: bold;
}
-->
</style>
<body>

<center>
  <table width="1176" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
  <?php 	
	for($i=0;$i<$linha;$i++){ 
          if($array[$i]['flag']==1){		  
  ?>
      <tr style="page-break-before: always;border-top-style: dotted;
    border-right-style: solid;
    border-bottom-style: dotted;
    border-left-style: solid;">
      <td colspan="4" ><center>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
          <strong>ESTADO DO RIO DE JANEIRO </strong><br />
          <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
            <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong></p>
      </center></td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #000000;"><center><span class="style1"><span class="style23">RELAT&Oacute;RIO DE PR&Eacute;-INSCRI&Ccedil;&Otilde;ES DE MATR&Iacute;CULAS </span></span></center></td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #000000;"><center>
        <span class="style23"><?php echo utf8_decode($array[$i]['unidade']);?></span>
      </center></td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
    <tr>
      <td width="260" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style24"><strong>ENSINO </strong></span></td>
      <td colspan="3" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style24"><span class="style23">SEGMENTO </span></span></td>
    </tr>
    <tr>
      <td style="border: 1px solid #000000;"><strong><strong><?php echo $array[$i]['tipo_segmento'];?></strong></strong></td>
      <td colspan="2" style="border: 1px solid #000000;"><strong><?php echo $array[$i]['segmento'];?></strong></td>
      <td width="397" style="border: 1px solid #000000;"><strong><strong><?php echo $array[$i]['distrito'];?></strong></strong></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">PROCOTOLO</span></td>
      <td colspan="2" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">NOME </span></td>
    </tr>
	<?php }?>
    <tr>
      <td colspan="2" class="style33" style="border: 1px solid #000000;"><center>
        </center>        <center class="style32">
          <strong><?php echo "000".$array[$i]['protocolo'];?></strong>
      </center></td>
      <td colspan="2" class="style24" style="border: 1px solid #000000;"><strong><?php echo utf8_decode(@$array[$i]['nome']);?></strong></td>
    </tr>
   <p style="style=page-break-before: always;"></p>
	<?php }
	echo "<br />";
	?>
  </table>
  
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
	$mpdf->AddPage('L'); 
	$mpdf->allow_charset_conversion=true;
	// permite a conversao (opcional)
	$mpdf->charset_in='UTF-8';
	// converte todo o PDF para utf-8
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb} (Total de registros:'.$linha.')| PMDC/SMEDC');
	 
	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF
	 
	$mpdf->Output();
	// imprime
	 
exit();


?> 
