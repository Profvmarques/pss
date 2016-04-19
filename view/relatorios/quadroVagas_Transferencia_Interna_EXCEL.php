<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('quadroVagas_Transferencia_interna');
?>

<body>


<?php 
ob_start();  //inicia o buffer

$arquivo = 'planilha_quadro_de_vagas_escolas_transferencia_interna_'.date('Y-m-d_H:i:s').'.xls';

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );

?>
<center>
  <table width="90%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="4" align="center" valign="middle"><p align="center"><strong>ESTADO DO RIO DE JANEIRO </strong></p></td>
    </tr>
    <tr>
      <td colspan="4" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center" valign="middle"><strong>PREFEITURA DE DUQUE DE CAXIAS </strong></td>
    </tr>
    <tr>
      <td colspan="4" align="center" valign="middle"><strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O</strong></td>
    </tr>
    <tr>
      <td colspan="4" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center" valign="middle"><span class="style1"><strong>QUADRO DE VAGAS DE TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS INTERNAS</strong></span></td>
    </tr>
    <tr>
      <td colspan="4" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td width="41%" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style24" style="border: 1px solid #000000;"><span class="style24" style="border: 1px solid #000000;"><span class="style1"><strong>UNIDADE ESCOLAR</strong></span></span></span></td>
      <td width="28%" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style24" style="border: 1px solid #000000;"><span class="style1"><strong>SEGMENTO</strong></span></span></td>
      <td width="9%" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style24" style="border: 1px solid #000000;"><strong><span class="style1">VAGAS </span></strong></span></td>
      <td width="22%" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style24" style="border: 1px solid #000000;"><strong><span class="style1">REMANESCENTES </span></strong></span></td>
    </tr>
  </table>
  <table width="90%" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
  
   
    
    <!-- populando tabela -->
    
    
    <?php 
   
   for($i=0;$i<$linha;$i++){?>
     
    
 
    
    
    <tr>
      <td width="284" class="style31" style="border: 1px solid #000000;"><span class="style1" style="border: 1px solid #000000;"><?php echo @mysql_result($rs,$i,'ue.descricao');?></span></td>
      <td width="194" class="style1" style="border: 1px solid #000000;"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'se.descricao'));?></strong></td>
      <td width="59" class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'v.totalvagas'));?>
          </p>
        </center>
      </strong></span></td>
      <td width="148" class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'v.remanescente'));?>
          </p>
        </center>
      </strong></span></td>
      
       <?php } ?>
    </tr>
     
    
  </table>
  
  <br />
  <?php 
    $html = ob_get_clean();	 
	$html = utf8_encode($html);
	echo $html;
exit;
?>
  
  
  
  
</center>
  </body>

  

