<?php
ob_start();  //inicia o buffer
require_once('../../controles/relatorios.php');
Processo('cartaInscricaoIndevida');
?>

<body>
<?php for($i=0;$i<$linha;$i++){?>
<center>
  <p align="center"><img src="../../img/caxias.jpg" width="65" height="84" /><br/>
  <strong>ESTADO DO RIO DE JANEIRO </strong><br />
        <strong>PREFEITURA DE DUQUE DE CAXIAS </strong><br />
        <strong>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O </strong> </p>
		<br />
  <p align="center"><strong><u>MATR&Iacute;CULA SEM FILA 2015</u></strong></p>
  <br />
  <p align="center"><strong>COMUNICADO IMPORTANTE</strong></p>
  
  
  <p align="left">Senhor (a) <strong><?php echo utf8_decode(@mysql_result($rs,$i,'c.responsavel'));?></strong>,<br>
    <br>
    Voc&ecirc; escolheu realizar a inscri&ccedil;&atilde;o  para uma vaga na Rede P&uacute;blica Municipal de Duque de Caxias, para seu filho (a)  receber um ensino gratuito de qualidade e poder usufruir todos os benef&iacute;cios  legais que s&atilde;o de compet&ecirc;ncia do Munic&iacute;pio.
	<br>
  A unidade escolar por voc&ecirc; escolhida <strong>n&atilde;o ofertou vagas</strong> para esse segmento, portanto para n&atilde;o prejudicar sua  participa&ccedil;&atilde;o no sorteio da Educa&ccedil;&atilde;o Infantil, a SME- Duque de Caxias efetivou a  pr&eacute;-inscri&ccedil;&atilde;o para a unidade escolar mais pr&oacute;xima da sua resid&ecirc;ncia.</p>
  <br />
  <p align="center"><strong>VOC&Ecirc;  DEVE COMPARECER IMEDIATAMENTE A SEGUINTE UNIDADE ESCOLAR:</strong></p>
  
  <p align="left">ESCOLA:<strong><?php echo utf8_decode(@mysql_result($rs,$i,'ue.descricao'));?></strong></p>
  <p align="left">ENDERE&Ccedil;O: <strong><?php echo utf8_decode(@mysql_result($rs,$i,'ue.endereco')).", ".utf8_decode(@mysql_result($rs,$i,'ue.bairro')).", ".utf8_decode(@mysql_result($rs,$i,'ue.municipio'))." - ".utf8_decode(@mysql_result($rs,$i,'ue.cep'));?></strong></p>
  
  <p>Ao comparecer a Unidade Escolar acima  voc&ecirc; tomar&aacute; ci&ecirc;ncia da continuidade do processo de inscri&ccedil;&atilde;o e <strong>a data e  hor&aacute;rio do sorteio das vagas da Educa&ccedil;&atilde;o Infantil</strong>, a qual o seu filho (a)  participar&aacute;. Aproveitamos para informar que a lista completa com datas e  hor&aacute;rios de todas as escolas participantes dos sorteios das vagas da Educa&ccedil;&atilde;o  Infantil est&aacute; dispon&iacute;vel no portal da SME na internet:  &lt;http://smeduquedecaxias.rj.gov.br/portal/</p>
 
  <p align="center">Atenciosamente,</p>
  <br />
  <p align="center"><strong>SECRETARIA  MUNICIPAL DE EDUCA&Ccedil;&Atilde;O DE DUQUE DE CAXIAS</strong></p>
  <br />
  <p align="center"><strong>Maiores  Informa&ccedil;&otilde;es - voc&ecirc; pode entrar em contato com a Central de Matr&iacute;cula:</strong><br>
      <strong>TEL.  2653-4811 / E-MAIL: SEMFILA2015@SMEDUQUEDECAXIAS.RJ.GOV.BR</strong></p>
  <p align="center">&nbsp;</p>
  </center>

  
  <style>
  	#carta-dados { background:url(http://faeterj-caxias.net/sgm/view/carta/img/02.png) no-repeat; width:799px; height:993px; margin:0; padding:300px 180px 0; page-break-before: always; }
	.nome-dados, .end-dados, .ano-dados { font-size:12px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; text-transform:uppercase; }
	.nome-dados { }
	.end-dados { clear:both; padding:0 10px; width:500px;  height:27px; }
	.ano-dados {   }
  </style>
  <div id="carta-dados">
  
  	<div class="dados">
		<p class="nome-dados">Aluno(a): <strong><?php echo utf8_decode(@mysql_result($rs,$i,'c.nome'));?></strong></p>
		<p class="end-dados">Endere&ccedil;o:<?php echo utf8_decode(@mysql_result($rs,$i,'c.endereco')).", ".utf8_decode(@mysql_result($rs,$i,'c.bairro')).", ".utf8_decode(@mysql_result($rs,$i,'c.cidade'))." - ".utf8_decode(@mysql_result($rs,$i,'c.cep'));?></p>
		<p class="ano-dados">Ano de Escolaridade: <strong><?php echo utf8_decode(@mysql_result($rs,$i,'se.descricao'));?></strong></p>
	
	</div>
  
  </div>
  
  
<?php }?>
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
	//$mpdf->SetFooter('{DATE j/m/Y  H:i}|{PAGENO}/{nb}| PMDC/SMEDC');
	 
	$mpdf->WriteHTML($html);
	// escreve definitivamente o conteudo no PDF
	 
	$mpdf->Output();
	// imprime
	 
exit();
?> 
