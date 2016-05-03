<?php
ob_start(); 
require_once('../../controles/relatorios.php');
Processo('listaGeralCargo');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
</head>
<script src="../../js/Validacaoform.js"></script>
<style type="text/css">
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
.style33 strong .style1 {
	text-align: center;
}

-->

</style>
<?php
$arquivo = 'listaGeralPontuadaExcel'.date('Y-m-d_H:i:s').'.xls';

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
?>
<body>
<form class="form-horizontal"  id="form" name="form" method="post">

<center>

  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>

  <strong>ESTADO DO RIO DE JANEIRO </strong><br />

        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>FUNDA&Ccedil;&Atilde;O DE APOIO &Agrave; ESCOLA T&Eacute;CNICA, CI&Ecirc;NCIA, TECNOLOGIA, ESPORTE, LAZER, CULTURA E POL&Iacute;TICAS SOCIAIS DE DUQUE DE CAXIAS</strong><br />

  </p>
  <p align="center">&nbsp;</p>

  <p align="center" class="style11"><strong>LISTA DE PONTUA&Ccedil;&Atilde;O DOS CANDIDATOS</strong></p>
  <br />
  <br />
  <?php if($linha>0){?>
  <table width="75%" border="1" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    <?php 
 for ($i = 0; $i < $linha; $i++) {	
	if($array[$i]['cargo']!='' && $array[$i]['total']>0 && $array[$i]['total']<= $linha) {?>
    <tr style="color:#fff">
      <td colspan="6" bgcolor="#337ab7" class="style241" style="border: 1px solid #"><center>
        <b><?php echo utf8_encode(@mysql_result($rs,$i,'c.descricao'));?><b>
      </center></td>
    </tr>
    <tr style="color:#fff">
      <td width="121" bgcolor="#337ab7" class="style241" style="border: 1px solid #000000;"><strong><span class="style11">CLASSIFICA</span>&Ccedil;&Atilde;O </strong></td>
      <td width="121" bgcolor="#337ab7" class="style241" style="border: 1px solid #000000;"><strong><span class="style11">INSCRI</span>&Ccedil;&Atilde;O</strong></td>
      <td width="338" bgcolor="#337ab7" class="style241" style="border: 1px solid #000000;"><strong><span class="style11">NOME</span></strong></td>
      <td width="351" bgcolor="#337ab7" class="style241" style="border: 1px solid #000000;"><center>
        <strong><span class="style11">NASCIMENTO</span></strong>
      </center></td>
      <td width="164" bgcolor="#337ab7" class="style241" style="border: 1px solid #000000;"><center>
        <strong><span class="style11">PONTUA</span>&Ccedil;&Atilde;O<span class="style11"></span></strong>
      </center></td>
    </tr>
    <?php }
 ?>
    <!-- populando tabela -->
    <tr>
      <td class="style331" style="border: 1px solid #000000;"><center>
        <strong><?php echo $array[$i]['classificacao']?></strong>
      </center></td>
      <td class="style331" style="border: 1px solid #000000;"><span class="style34"><strong> <?php echo "000".@mysql_result($rs,$i,'i.idinscricao');?></strong></td>
      <td class="style331" style="border: 1px solid #000000;"><center>
        <p class="style11"><span class="style341"><strong><?php echo @mysql_result($rs,$i,'i.nome');?></strong></span></p>
      </center></td>
      <td class="style11"><p class="style11">
        <center>
          <?php echo utf8_decode(@mysql_result($rs,$i,'dtnasc'));?>
        </center>
      </p></td>
      <td align="left" class="style331" style="text-align: left"><center>
        <strong><span class="style11"><?php echo utf8_decode(@mysql_result($rs,$i,'i.pontos'));?></span></strong>
      </center></td>
    </tr>
    <?php }
	  
	   ?>
    <tr>
      <td colspan="5" class="style331" style="border: 1px solid #000000;"><?php echo "Total de inscritos: ".$linha;?></td>
    </tr>
  </table>
  <?php }
	  
	  ?>
<p align="center" class="style1">&nbsp;</p></center>
</form>
  </body>
  <?php 
    $html = ob_get_clean();	 
	$html = utf8_encode($html);
	echo $html;
exit;
?>
</htmL>

