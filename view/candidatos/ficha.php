<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('fichaCandidato');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
</head>
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

        <strong>
    FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA, CI&Ecirc;NCIA, TECNOLOGIA, ESPORTE, LAZER, CULTURA E POL&Iacute;TICAS SOCIAIS DE DUQUE DE CAXIAS</strong> <br />

  </p>

  <p align="center" class="style1">&nbsp;</p>

  <p align="center" class="style1"><span class="style23">EDITAL N.&ordm; 003 DO PROCESSO SELETIVO SIMPLIFICADO N.&ordm; 01/2016</span></p>

  <br />

<br />
<br />

  <div class="style26" style="margin-left:auto"><strong>INSCRI&Ccedil;&Atilde;O : <?php echo "000".utf8_decode(@mysql_result($rs,0,'i.idinscricao'));?></strong> | NOME &nbsp;: <?php echo utf8_decode(@mysql_result($rs,0,'i.nome'));?> | <span class="style26" style="margin-left:auto">RG &nbsp;: <?php echo @mysql_result($rs,0,'i.rg');?>&nbsp;</span></div>

  <br />

  

  <div class="style26" style="margin-left:auto"><span class="style26" style="margin-left:auto">CPF &nbsp;: <?php echo @mysql_result($rs,0,'u.cpf');?> &nbsp;|<span class="style26" style="margin-left:auto">RG &nbsp;: <?php echo @mysql_result($rs,0,'i.rg');?> &nbsp;| <span class="style26" style="margin-left:auto">DATA DE EXPEDI&Ccedil;&Atilde;O &nbsp;: <?php echo @mysql_result($rs,0,'data_exp');?> &nbsp;| </span></span></span>SEXO &nbsp;: <?php echo @mysql_result($rs,0,'i.sexo');?> &nbsp;| NASCIMENTO&nbsp;: <?php echo @mysql_result($rs,0,'dtnasc');?></div>

   <br />

  <div class="style26" style="margin-left:auto"><span class="style26" style="margin-left:auto">ENDERE&Ccedil;O&nbsp;: <?php echo utf8_decode(@mysql_result($rs,0,'i.endereco'));?></span> | N&Uacute;MERO&nbsp;: <?php echo @mysql_result($rs,0,'i.numero');?> | COMPLEMENTO :      <?php echo utf8_decode(@mysql_result($rs,0,'i.complemento'));?> | CEP&nbsp;: <?php echo @mysql_result($rs,0,'i.cep');?></div>

   <br />

  <div class="style26" style="margin-left:auto"> BAIRRO&nbsp;: <?php echo utf8_decode(@mysql_result($rs,0,'i.bairro'));?> | CIDADE&nbsp;: <?php echo utf8_decode(@mysql_result($rs,0,'i.cidade'));?> | UF&nbsp;: <?php echo @mysql_result($rs,0,'i.uf');?></div>

   <br />

  <div class="style26" style="margin-left:auto">TELEFONE &nbsp;: <?php echo @mysql_result($rs,0,'i.telefone');?> | CELULAR &nbsp;: <?php echo @mysql_result($rs,0,'i.celular');?> | E-MAIL : &nbsp;<?php echo @mysql_result($rs,0,'i.email');?></div>

   <br />
  <div class="style26" style="margin-left:auto">CARGO PRETENDIDO &nbsp;: <?php echo @mysql_result($rs,0,'c.descricao');?></div>
    <br />
  
  <div class="style26" style="margin-left:auto"><b>EXPERI&Ecirc;NCIA PROFISSIONAL &nbsp;: <?php echo @mysql_result($rs,0,'e.descricao');?></b></div>
  <br />
    <div class="style26" style="margin-left:auto"><b><?php echo $adm_publica;?></b></div>
    <br />
    <div class="style261" style="margin-left:auto"><b><?php echo $participacao_projetos;?></b></div>
    <br />
    <div class="style261" style="margin-left:auto"><b><?php echo $curso_extensao;?></b></div>
    <br />
    <div class="style261" style="margin-left:auto"><b><?php echo $curso_aperfeicoamento;?></b></div>
    <br />
    <div class="style261" style="margin-left:auto"><b><?php echo $inf_basica;?></b></div>
    <br />
  <div class="style26" style="margin-left:auto"><b>TOTAL DE PONTOS &nbsp;: <?php echo @mysql_result($rs,0,'i.pontos');?></b></div>
  <p class="style26">&nbsp;</p>
</center>

</body>
</html>
<?php 

$html = ob_get_clean();

	// pega o conteudo do buffer, insere na variavel e limpa a mem�ria

	 

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

	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/FUNDEC');

	 

	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF

	 

	$mpdf->Output('ficha.pdf', 'D');
	// imprime

	 

exit();

?> 

