<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('listaCandidatoSorteioCreche');
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
  <table width="1001" cellpadding="2" cellspacing="0" style="border: 1px solid #000000; page-break-before:always;">
    <?php 	
	for($i=0;$i<$linha;$i++){ 
          if($array[$i]['flag']==1){		  
  ?>
    <tr style="page-break-before: always;border-top-style: dotted;
    border-right-style: solid;
    border-bottom-style: dotted;
    border-left-style: solid;">
      <td colspan="6" ><center>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
          <strong>ESTADO DO RIO DE JANEIRO </strong><br />
          <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
            <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong></p>
      </center></td>
    </tr>
    <tr>
      <td colspan="6" style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6" style="border: 1px solid #000000;"><center><span class="style1"><span class="style23">RELAT&Oacute;RIO DE PR&Eacute;-INSCRI&Ccedil;&Otilde;ES DE MATR&Iacute;CULAS </span></span></center></td>
    </tr>
    <tr>
      <td colspan="6" style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6" style="border: 1px solid #000000;"><center>
        <span class="style23"><?php echo utf8_decode($array[$i]['unidade']);?></span>
      </center></td>
    </tr>
    <tr>
      <td colspan="6" style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
    <tr>
      <td width="145" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style31">ENSINO</span></td>
      <td colspan="5" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style31">SEGMENTO </span></td>
    </tr>
    <tr>
      <td style="border: 1px solid #000000;"><strong><strong><?php echo $array[$i]['tipo_segmento'];?></strong></strong></td>
      <td colspan="2" style="border: 1px solid #000000;"><strong><?php echo $array[$i]['segmento'];?></strong></td>
      <td colspan="3" style="border: 1px solid #000000;"><strong><strong><?php echo $array[$i]['distrito'];?></strong></strong></td>
    </tr>
    <tr>
      <td width="145" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">SORTEIO</span></td>
      <td width="147" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">PROCOTOLO</span></td>
      <td width="205" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">NOME </span></td>
      <td width="143" bordercolor="#CCCCCC" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style31">NASC.</span></td>
      <td width="184" bordercolor="#CCCCCC" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style31">CLASSIFICA&Ccedil;&Atilde;O</span></td>
      <td width="151" bordercolor="#CCCCCC" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style31">ORDEM</span></td>
    </tr>
	<?php }?>
    <tr>
      <td class="style33" style="border: 1px solid #000000;"><center>
          <strong><?php echo "000".$array[$i]['protocolo'];?></strong>
      </center></td>
      <td class="style24" style="border: 1px solid #000000;"><center class="style32">
          <strong><?php echo "000".$array[$i]['protocolo'];?></strong>
      </center></td>
      <td class="style24" style="border: 1px solid #000000;"><strong><?php echo utf8_decode(@$array[$i]['nome']);?></strong></td>
      <td style="border: 1px solid #000000;"><strong><?php echo utf8_decode(@$array[$i]['nasc']);?></strong></td>
      <td style="border: 1px solid #000000;"><span class="style24">( &nbsp;) SIM (&nbsp; ) N&Atilde;O </span></td>
      <td style="border: 1px solid #000000;">&nbsp;</td>
    </tr>
      

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
