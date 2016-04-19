<?php

ob_start();  //inicia o buffer

require_once('../../controles/relatorios.php');

Processo('lista_Contemplados_Ed_Infantil_Fun_Eja_dindividual');

?>
<script src="../../js/Validacaoform.js"></script>
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
.style33 strong .style1 {
	text-align: center;
}

-->

</style>

<body>
<form class="form-horizontal"  id="form" name="form" method="post">
<center>

  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>

  <strong>ESTADO DO RIO DE JANEIRO </strong><br />

        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />

        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> <br />

  </p>

  <p align="center" class="style1"><strong>ED. INFANTIL, FUNDAMENTAL E EJA</strong>
  

  <?php if($linha>0){?>
  </p>
  <table width="90%" border="1" cellpadding="2" cellspacing="0" style="border: 1px solid #000000;">

    <tr>

      <td colspan="6" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><center><b><?php echo @mysql_result($rs,0,'ue.descricao');?><b></center></td>

    </tr>


    <tr>
 
      <td colspan="5" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;">&nbsp;</td>
      <td bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"> 
      
      <!-- <button type="button" class="btn btn-primary" onClick="validar(document.form);">ATUALIZAR</button>-->
       
       
        </span>
        <input name="ok" type="hidden" id="ok"/>
        </td>

    </tr>

    <tr>

      <td width="93" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">SEGMENTO</span></strong></td>

      <td width="66" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">PROTOC</span></strong></td>
      <td width="146" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">ALUNO </span></strong></td>

      <td width="124" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">RESPONS&Aacute;VEL</span></strong></td>
      <td width="53" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">FICHA </span></strong></td>

      <td width="106" bgcolor="#CCCCCC" class="style24" style="border: 1px solid #000000;"><strong><span class="style1">EFETIVOU A MATR&Iacute;CULA?</span></strong></td>

    </tr>

    <!-- populando tabela -->

    <?php 

   

   for($i=0;$i<$linha;$i++){?>

    <tr>

  

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong> <?php echo @mysql_result($rs,$i,'se.descricao');?> </strong></td>

      <td class="style33" style="border: 1px solid #000000;"><span class="style34"><strong>
        
        <center>
          
          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'i.idinscricao'));?></p>
          
          </center>
        
      </strong></span></td>
      <td align="left" class="style33" style="text-align: left"><span class="style34"><strong>
        
        <center>
          
          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.nome'));?></p>
          
          </center>
        
      </strong></span></td>

      <td align="left" class="style33" style="text-align: left"><span class="style34"><strong>

        <center>

          <p class="style1"><?php echo utf8_decode(@mysql_result($rs,$i,'c.responsavel'));?></p>

        </center>

      </strong></span></td>
      <td align="center" class="style33" style="border: 1px solid #000000;"><span class="style33" style="border: 1px solid #000000;"><a href="../candidatos/ficha.php?id=<?php echo mysql_result($rs,$i,'i.idinscricao');?>" target="_blank"><img src="../../img/lista.png" width="24" height="24" /></a></span></td>

      <td class="style33" style="border: 1px solid #000000; text-align: center;">
        
                          
                                                                
    <?php
	if(@mysql_result($rs,$i,'i.efetivacao')==1) {
		echo "Efetivado";		 
	}else{
		?>
          <!--<input name="efetivacao<?php echo $i;?>" type="checkbox" id="efetivacao<?php echo $i;?>" <?php echo mysql_result($rs,$i,'chk_efetivacao');?> /> -->
        <?php
		
		echo "Desistente (N&atilde;o compareceu)";
	}
			 ?>                     
      </td>   

   
    <?php } ?>
 </tr>
  </table>

  <?php }else{?>

  <B>Nenhum registro encontrado!</B>

  <?php }?>

  <br />

</center>
</form>
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

