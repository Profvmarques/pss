<?php ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('listaCandidatoEd_especial');
?>
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style23 {font-size: 18px; font-weight: bold; }
.style24 {font-size: 18px}
.style26 {font-size: 12px; }
-->
</style>
 <?php 	
	for($i=0;$i<$linha;$i++){ 
          		  
  ?>
<div style="page-break-before:always">
<center>
  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
  <strong>ESTADO DO RIO DE JANEIRO </strong><br />
        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />
  </p>
  <p align="center" class="style1"><span class="style23"><?php echo $tipo;?> </span></p>
  <br />
<br />
  <table width="1010">
    <tr>
      <td colspan="2" class="style24"><span class="style23"><center><?php echo @mysql_result($rs,$i,'i.fase')." ETAPA";?></center></span></td>
    </tr>
    <tr>
      <td class="style24">&nbsp;</td>
      <td class="style23">&nbsp;</td>
    </tr>
    <tr>
      <td width="559" class="style24"><strong>ENSINO &nbsp;: <?php echo @mysql_result($rs,$i,'ts.descricao');?></strong></td>
      <td width="439" class="style23">SEGMENTO REQUERIDO: &nbsp;<?php echo @mysql_result($rs,$i,'se.descricao');?></td>
    </tr>
	<?php if(@mysql_result($rs,$i,'i.fase')=='PRIMEIRA' && @mysql_result($rs,$i,'i.classificacao')>0){?>
    <tr>
      <td class="style24"><strong>CLASSIFICA&Ccedil;&Atilde;O &nbsp;: <?php echo @mysql_result($rs,$i,'i.classificacao');?></strong></td>
      <td class="style23">SITUA&Ccedil;&Atilde;O: &nbsp;<?php echo $situacao;?></td>
    </tr>
	<?php }?>
  </table>
  <br />
  <div class="style26" style="margin-left:auto"><strong>PROTOCOLO</strong> : <?php echo "000".utf8_decode(@mysql_result($rs,$i,'i.idinscricao'));?> | NOME &nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.nome'));?> | <span class="style26" style="margin-left:auto">RG/&Oacute;RG&Atilde;O &nbsp;: <?php echo @mysql_result($rs,$i,'c.rg');?>&nbsp;</span></div>
  <br />
  
  <div class="style26" style="margin-left:auto">SEXO &nbsp;: <?php echo @mysql_result($rs,$i,'c.sexo');?> &nbsp;| NASCIMENTO&nbsp;: <?php echo $array[$i]['dtnasc'];?> &nbsp;| IDADE &nbsp;: <?php echo @mysql_result($rs,$i,'c.idade')." anos";?> &nbsp;| PAI &nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.pai'));?></div>
   <br />
  <div class="style26" style="margin-left:auto">M&Atilde;E &nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.mae'));?>&nbsp;| <span class="style26" style="margin-left:auto">ENDERE&Ccedil;O&nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.endereco'));?></span> | N&Uacute;MERO&nbsp;: <?php echo @mysql_result($rs,$i,'c.numero');?> | COMPLEMENTO :      <?php echo utf8_decode(@mysql_result($rs,$i,'c.complemento'));?> | CEP&nbsp;: <?php echo @mysql_result($rs,$i,'c.cep');?></div>
   <br />

  <div class="style26" style="margin-left:auto"> BAIRRO&nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.bairro'));?> | CIDADE&nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.cidade'));?> | UF&nbsp;: <?php echo @mysql_result($rs,$i,'c.uf');?></div>
   <br />
  <div class="style26" style="margin-left:auto">TELEFONE &nbsp;: <?php echo @mysql_result($rs,$i,'c.telefone');?> | CELULAR &nbsp;: <?php echo @mysql_result($rs,$i,'c.celular');?> | E-MAIL : &nbsp;<?php echo @mysql_result($rs,$i,'c.email');?></div>
   <br />
   <div class="style26" style="margin-left:auto">RESPONS&Aacute;VEL&nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.responsavel'));?> | <span class="style26" style="margin-left:auto">CPF &nbsp;: <?php echo @mysql_result($rs,$i,'c.cpf');?></span></div>
    <br />
	<?php //if((@mysql_result($rs,$i,'i.fase')='PRIMEIRA'){?>
	<div class="style26" style="margin-left:auto"> UNIDADE ESCOLAR   : &nbsp;<?php echo $array[$i]['unidade1'];?></div>
	<br />
	<?php //}?>
    <?php if($array[$i]['tipoEnsino']==1 || $array[$i]['tipoEnsino']==2){?>
	<div class="style26" style="margin-left:auto">SEGUNDA UNIDADE ESCOLAR   : &nbsp;<?php echo $array[$i]['unidade2'];?></div>
	<br />
    <div class="style26" style="margin-left:auto">TERCEIRA UNIDADE ESCOLAR   : &nbsp;<?php echo $array[$i]['unidade3'];?></div>
	<br />
     <div class="style26" style="margin-left:auto">QUARTA UNIDADE ESCOLAR   : &nbsp;<?php echo $array[$i]['unidade4'];?></div>
	<br />
     <div class="style26" style="margin-left:auto">QUINTA UNIDADE ESCOLAR   : &nbsp;<?php echo $array[$i]['unidade5'];?></div>
	<br />
	<?php }?>
   <div class="style26" style="margin-left:auto">DEFICI&Ecirc;NCIA : &nbsp;<?php echo @mysql_result($rs,$i,'c.auditiva'). "   ".@mysql_result($rs,$i,'c.visual'). "   ".@mysql_result($rs,$i,'c.motora'). "   ".@mysql_result($rs,$i,'c.intelectual'). "   ".@mysql_result($rs,$i,'c.multipla'). "  ".@mysql_result($rs,$i,'c.transtorno_globa');?></div>
   </BR>
   <div class="style26" style="margin-left:auto">LAUDO : &nbsp;<?php echo utf8_decode(@mysql_result($rs,$i,'c.deficiencias_outras')) ;?></div>
   </BR>
  <div class="style26" style="margin-left:auto"> CAMISA&nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.camisa_aluno'));?> | BERMUDA&nbsp;: <?php echo utf8_decode(@mysql_result($rs,$i,'c.bermuda_aluno'));?> | P&Eacute;(T&Ecirc;NIS)&nbsp;: <?php echo @mysql_result($rs,$i,'c.pe_aluno');?></div>
  <span class="style26">
  </span>
  <p class="style26">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
</center>
  <center class="style26">
  <table width="1010" align="center">
    <tr>
      <td colspan="2"><center>
        <div align="center"><strong>DOCUMENTO COMPROBAT&Oacute;RIO DE PR&Eacute;-INSCRI&Ccedil;&Atilde;O PARA 2016 &nbsp;</strong></div></center></td>
    </tr>
    <tr>
      <td width="235"><strong>PROTOCOLO</strong> : <?php echo "000".utf8_decode(@mysql_result($rs,$i,'i.idinscricao'));?></td>
      <td><strong>DATA DE INSCRI&Ccedil;&Atilde;O : <?php echo $array[$i]['dtinscricao'];?></strong></td>
      </tr>
    <tr>
      <td colspan="2" align="center"><br/><br/>
        <br/><br/><br /><br /><br /><br /></td>
    </tr>
  </table>
  
   	<?php }	?>
</center>
</div>
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
	$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/SMEDC');
	 
	$mpdf->WriteHTML($html);
	
	 // define um nome para o arquivo PDF
	 $arquivo = date("d/m/y his").'_FichaEducacaoEspecial.pdf';

    // gera o relatório
	$mpdf->Output($arquivo,'D');

		 
exit();

?> 
