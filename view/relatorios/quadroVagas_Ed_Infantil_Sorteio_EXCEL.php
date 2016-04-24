<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('quadroVagas_ed_infantil_sorteio');
?>



<?php 
ob_start();  //inicia o buffer

$arquivo = 'planilha_quadro_de_vagas_ed_infantil_sorteio_'.date('Y-m-d_H:i:s').'.xls';

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
<center>
  <p align="center"><br/>
  <strong>ESTADO DO RIO DE JANEIRO </strong><br />
        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />
  </p>
  <p align="center" class="style1"><span class="style1"><strong>LISTA DE PR&Eacute;-INSCRI&Ccedil;&Otilde;ES DE MATR&Iacute;CULAS</strong></span></p>
  <p align="center" class="style1"><span class="style1"><strong> EDUCA&Ccedil;&Atilde;O INFANTIL (SORTEIO)</strong></span></p>
  <br />
  <br />
  <table width="99%" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">
    
    <tr>
      <td width="141" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong>DISTRITO</strong></td>
      <td width="259" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><span class="style24" style="border: 1px solid #000000;"><span class="style24" style="border: 1px solid #000000;"><span class="style1"><strong>UNIDADE ESCOLAR</strong></span></span></span></td>
      <td width="82" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">SEGMENTO</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PROTOC.</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">ALUNO</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong>NASC</strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PAI</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">M&Atilde;E</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">REPONS&Aacute;VEL</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">TEL.</span></strong></td>
      <td width="203" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">CEL.</span></strong></td>
      <td width="203" bgcolor="#888888" class="style24" style="border: 1px solid #000000; color: #FFFCFC;"><strong><span class="style1">CLASSIFICA&Ccedil;&Atilde;O</span></strong></td>
    </tr>
  
   
    
    <!-- populando tabela -->
    
    
    <?php 
   
   for($i=0;$i<$linha;$i++){?>
     
    
 
    
    
    <tr>
      <td class="style31" style="border: 1px solid #000000;"><span class="style1" style="border: 1px solid #000000;"><?php echo @mysql_result($rs,$i,'d.descricao');?></span></td>
      <td class="style1" style="border: 1px solid #000000;"><strong><?php echo utf8_decode(@mysql_result($rs,$i,'ue.descricao'));?></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'se.descricao'));?>
          </p>
        </center>
      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'i.idinscricao'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        <center>
          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.nome'));?>
          </p>
        </center>
      </strong></span></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.nascimento'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.pai'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.mae'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.responsavel'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.telefone'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;"><strong><span class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.celular'));?></span></strong></td>
      <td class="style33" style="border: 1px solid #000000;">&nbsp;</td>
      
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

  

