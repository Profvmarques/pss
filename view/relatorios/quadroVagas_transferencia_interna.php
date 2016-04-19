<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('quadroVagas_Transferencia_interna');
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
  <p align="center" class="style1"><span class="style1"><strong>QUADRO DE VAGAS DE TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS INTERNAS </strong></span></p>
  <br />
  <br />
  <table width="80%" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    
    <tr>
      <td width="297" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style24" style="border: 1px solid #000000;"><span class="style1"><strong>UNIDADE ESCOLAR</strong></span></span></td>
      <td width="221" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style1"><strong>SEGMENTO</strong></span></td>
      <td width="86" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">VAGAS </span></strong></td>
      <td width="101" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">TOTAL DE INSCRITOS </span></strong></td>
      <td width="148" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">REMANESCENTES </span></strong></td>
    </tr>
  
   
    
    <!-- populando tabela -->
    
    
    <?php 
   
   for($i=0;$i<$linha;$i++){?>
     
    
 
    
    
    <tr>
      <td class="style31" style="border: 1px solid #000000;"><span class="style1" style="border: 1px solid #000000;"><?php echo utf8_decode($array[$i]['unidade']);?></span></td>
      <td class="style1" style="border: 1px solid #000000;"><strong><?php echo utf8_decode($array[$i]['segmento']);?></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode($array[$i]['vagas']);?>
          </p>
        </center>
      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode($array[$i]['inscritos']);?>
          </p>
        </center>
      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode($array[$i]['remanescente']);?> </p>
        </center>
      </strong></span></td>
      <?php } ?>
    </tr>
     
    
  </table>
  <br />
</center>
  </body>

  
<?php 
/*$html = ob_get_clean();
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
	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/SMEDC');
	 
	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF
	 
	$mpdf->Output();
	// imprime
	 
exit();  */  
?> 
