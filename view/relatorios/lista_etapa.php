<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('listaEtapa');
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
.style33 {font-size: 36px; font-weight: bold; }
.style35 {font-size: 14px; font-weight: bold; }
.style36 {font-size: 14px; }
.style37 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<body>
<?php if($linha>0){?>
<center>
  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
  <strong>ESTADO DO RIO DE JANEIRO </strong><br />
        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />
  </p>
  <p align="center" class="style1">&nbsp;</p>
  <p align="center" class="style1"><span class="style23">RELAT&Oacute;RIO DE <?php echo $tipo;?> DE MATR&Iacute;CULAS</span></p>
  <p align="center" class="style1"><span class="style23"><?php echo $unidade;?></span></p>
  <br />
  <table width="1256" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    <tr>
      <td width="358" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style24"><strong>ENSINO </strong></span></td>
      <td colspan="2" bgcolor="#CCCCCC" style="border: 1px solid #000000;"><span class="style24"><span class="style23">SEGMENTO </span></span></td>
    </tr>
    <tr>
      <td style="border: 1px solid #000000;"><span class="style24"><strong> <strong><?php echo @mysql_result($rs,$i,'tiposegmento.descricao');?></strong></strong></span></td>
      <td width="335" style="border: 1px solid #000000;"><span class="style24"><span class="style23"><strong><?php echo @mysql_result($rs,$i,'segmentoescolar.descricao');?></strong></span></span></td>
      <td width="302" style="border: 1px solid #000000;"><span class="style24"><strong><strong><?php echo @mysql_result($rs,$i,'distrito.descricao');?></strong></strong></span></td>
    </tr>
  </table>
  <br />
  <table width="1256" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    <tr>
      <td width="125" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">CLASSIFICA&Ccedil;&Atilde;O</span></td>
      <td width="101" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">
      <center>PROTOCOLO</center></span></td>
      <td width="270" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">NOME </span></td>
      <td width="270" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">ENDERE&Ccedil;O </span></td>
      <td width="138" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">BAIRRO </span></td>
      <td width="84" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">TELEFONE </span></td>
      <td width="94" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">CELULAR </span></td>
      <td width="94" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style35">SITUA&Ccedil;&Atilde;O </span></td>
    </tr>
    <?php 

	for($i=0;$i<$linha;$i++){?>
    <tr>
      <td class="style35" style="border: 1px solid #000000;"><center>
          <strong><?php echo @mysql_result($rs,$i,'inscricao.classificacao');?></strong>
      </center></td>
      <td class="style36" style="border: 1px solid #000000;"><center>
          <strong><a href="../candidatos/ficha2.php?id=<?php echo @mysql_result($rs,$i,'candidatos.idcandidatos');?>" target="_blank"><?php echo "000".@mysql_result($rs,$i,'inscricao.idinscricao');?></a></strong>
      </center></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style36"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'candidatos.nome'));?></strong></span>          </td>
		  
		  <td class="style33" style="border: 1px solid #000000;"><span class="style36"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'candidatos.endereco'));?></strong></span> </td>
		  <td class="style33" style="border: 1px solid #000000;"><span class="style36"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'candidatos.bairro'));?></strong></span> </td>
		  <td class="style33" style="border: 1px solid #000000;"><span class="style36"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'candidatos.telefone'));?></strong></span> </td>
		  <td class="style33" style="border: 1px solid #000000;"><span class="style36"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'candidatos.celular'));?></strong></span> </td>
		  <td class="style33" style="border: 1px solid #000000;"><span class="style36"><strong>
		  <?php if(@mysql_result($rs,$i,'inscricao.classificacao')<=$totalVagas){
		       echo '<font color="#006600">CONTEMPLADO</font>';
		  }else{
		    echo '<font color="#FF0033">AGAUARDANDO VAGA</font>';
		  }?></strong></span> </td>
    </tr>
    <?php }?>
    <tr>
      <td height="26" colspan="8" class="style31"><div align="right">Total : <strong><?php echo $linha;?></strong></div></td>
    </tr>
  </table>
  <br />
</center>
<p>
  <?php }else{?>
</p>
<p align="center" class="style37">N&Atilde;O H&Aacute; REGISTROS </p>
<?php }?>
</body>
<?php /*
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
	 
exit();*/
?> 
