<?php

require_once('controles/publico.php');

Processo('publico');

?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<div class="box">

<h2>Lista de Pr&eacute;-inscri&ccedil;&atilde;o e Transfer&ecirc;ncia de Matr&iacute;cula(Primeira Etapa)</h2>



 
      <p align="center" class="style1">Pr&eacute;-inscri&ccedil;&atilde;o</p>
        <p><img src="img/educacaoInfantil.png" border="0" /> </p>
        <table width="600">
          <tr>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=INFANTIL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=15" target="_blank">1 Ano</a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=INFANTIL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=16" target="_blank">2 Anos</a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=INFANTIL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=18" target="_blank">3 Anos</a> </td>
            <td> <a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=INFANTIL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=19" target="_blank">4 Anos </a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=INFANTIL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=17" target="_blank">5 Anos </a></td>
          </tr>
        </table>
        <p><img src="img/educacaoFundamental.png" border="0" /></p>
        <p> <a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=6" target="_blank"> 1&ordm; ANO DE ESCOLARIDADE</a></p>
        <p><img src="img/eja.png" border="0" /></p>
        <p><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=EJA&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=1&idsegmento=1" target="_blank">ETAPA I - ALFA</a></p>
        <p align="center" class="style1">Transfer&ecirc;ncia</p>
      
        <p><img src="img/educacaoFundamental.png" border="0" /></p>
        <table width="485">
          <tr>
            <td width="124"><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=7" target="_blank">2&ordm; ANO</a></td>
            <td width="115"><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=8" target="_blank">3&ordm; ANO</a></td>
            <td width="110"><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=9" target="_blank">4&ordm; ANO </a></td>
            <td width="234"><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=10" target="_blank">5&ordm; ANO </a></td>
          </tr>
          <tr>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=11" target="_blank">6&ordm; ANO</a> </td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=12" target="_blank">7&ordm; ANO </a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=13" target="_blank">8&ordm; ANO</a> </td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=FUNDAMENTAL&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=14" target="_blank">9&ordm; ANO</a> </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p><img src="img/eja.png" border="0" /></p>
        <table width="540">
          <tr>
            <td width="240"><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=EJA&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=2" target="_blank">ETAPA II - 2&ordf; E 3&ordf; S&eacute;RIE</a></td>
            <td width="288"><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=EJA&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=3" target="_blank">ETAPA III - 4&ordf; E 5&ordf; S&eacute;RIE</a></td>
          </tr>
          <tr>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=EJA&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=4" target="_blank">ETAPA IV - 6&ordf; E 7&ordf; S&eacute;RIE</a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=PRIMEIRA&educacao=EJA&idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&idtipo_inscricao=2&idsegmento=5" target="_blank">ETAPA V - 8&ordf; E 9&ordf; S&eacute;RIE</a></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
   

</div>



<div class="box">

<h2>Lista de Pr&eacute;-inscri&ccedil;&atilde;o e Transfer&ecirc;ncia de Matr&iacute;cula (Segunda Etapa)</h2>

    

        <p align="center" class="style1">Pr&eacute;-inscri&ccedil;&atilde;o</p>
        <p><img src="img/educacaoFundamental.png" border="0" /></p>
        <p> <a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=1&amp;idsegmento=6" target="_blank"> 1&ordm; ANO DE ESCOLARIDADE</a></p>
        <p><img src="img/eja.png" border="0" /></p>
        <p><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=EJA&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=1&amp;idsegmento=1" target="_blank">ETAPA I - ALFA</a></p>
        <p align="center" class="style1">Transfer&ecirc;ncia</p>
        <p><img src="img/educacaoFundamental.png" border="0" /></p>
        <table width="485">
          <tr>
            <td width="124"><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=7" target="_blank">2&ordm; ANO</a></td>
            <td width="115"><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=8" target="_blank">3&ordm; ANO</a></td>
            <td width="110"><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=9" target="_blank">4&ordm; ANO </a></td>
            <td width="234"><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=10" target="_blank">5&ordm; ANO </a></td>
          </tr>
          <tr>
            <td><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=11" target="_blank">6&ordm; ANO</a> </td>
            <td><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=12" target="_blank">7&ordm; ANO </a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=13" target="_blank">8&ordm; ANO</a> </td>
            <td><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=FUNDAMENTAL&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=14" target="_blank">9&ordm; ANO</a> </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p><img src="img/eja.png" border="0" /></p>
        <table width="540">
          <tr>
            <td width="240"><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=EJA&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=2" target="_blank">ETAPA II - 2&ordf; E 3&ordf; S&eacute;RIE</a></td>
            <td width="288"><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=EJA&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=3" target="_blank">ETAPA III - 4&ordf; E 5&ordf; S&eacute;RIE</a></td>
          </tr>
          <tr>
            <td><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=EJA&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=4" target="_blank">ETAPA IV - 6&ordf; E 7&ordf; S&eacute;RIE</a></td>
            <td><a href="view/relatorios/lista_etapa.php?fase=SEGUNDA&amp;educacao=EJA&amp;idunidade=<?php echo $_SESSION['idunidade_escolar'];?>&amp;idtipo_inscricao=2&amp;idsegmento=5" target="_blank">ETAPA V - 8&ordf; E 9&ordf; S&eacute;RIE</a></td>
          </tr>
        </table>
</div>



<div class="box">

<h2>Atualiza&ccedil;&atilde;o de Senha </h2>

    <div class="content-box">

        <p><a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&ti=<?php echo base64_encode("2");?>"><img src="img/atulizacao_senha.png" border="0" /></a></p>

    </div>

</div>



