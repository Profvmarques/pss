<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('quadroVagas_CAMPO');
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
  <p align="center" class="style1"><span class="style1"><strong>QUADRO DE VAGAS DE PR&Eacute;-INSCRI&Ccedil;&Otilde;ES DE MATR&Iacute;CULAS ESCOLAS DO CAMPO </strong></span></p>
  <br />
  <br />
  <table width="832" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    <?php 
   $idunidade_escolar=0;
   $idtipo_segmento=0;
   for($i=0;$i<$linha;$i++){?>
    <?php  if($idtipo_segmento<>mysql_result($rs, $i, 'ts.idtipo_segmento')){?>
    <tr>
      <td colspan="4" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">
        <center>
        </center>
      </span></td>
    </tr>
    
    <tr>
      <td colspan="4" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">
        <center>
          <?php 
		 echo mysql_result($rs, $i, 'ue.descricao');
		 $idunidade_escolar=mysql_result($rs, $i, 'ue.idunidade_escolar');
		 ?>
        </center>
      </span></td>
    </tr>
    <tr>
      <td width="346" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">ANO ESCOLAR </span></td>
      <td width="82" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">VAGAS </span></td>
      <td width="129" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">REMANESCENTE </span></td>
      <td width="257" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style31">SITUA&Ccedil;&Atilde;O </span></td>
    </tr>
    <?php } ?>
    <tr>
      <td class="style31" style="border: 1px solid #000000;"><?php echo @mysql_result($rs,$i,'se.descricao');?></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <?php echo utf8_decode(@mysql_result($rs,$i,'v.totalvagas'));?>
        </center>
      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <?php echo utf8_decode(@mysql_result($rs,$i,'v.remanescente'));?>
        </center>
      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'v.tipovaga'));?></strong></span></td>
    </tr>
    <?php 
  $total+=mysql_result($rs,$i,'v.totalvagas');
  } ?>
    <tr>
      <td height="26" colspan="5" class="style31">Total de vagas: <strong><?php echo $total;?></strong></td>
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
