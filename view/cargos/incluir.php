<?php
require_once('controles/cargos.php');
Processo('incluir');
?>



<form class="form-horizontal" id="form" name="form" method="post">

  <table width="726" align="center">

    <tr>

      <td width="817">&nbsp;</td>

      <td width="181"><a href="default.php?pg=view/eventos/consulta.php&amp;form=Consulta de Eventos"><strong><i class="icon-search"> Consultar Eventos </i></strong></a> </td>

    </tr>

  </table>

  <p>&nbsp;</p>

  <table width="684" border="0" align="center">

    <tr>

      <td width="263">CARGO </td>

      <td width="411">

        <input name="descricao" type="text" class="input-xlarge" id="descricao" placeholder="" title="O campo evento é obrigatório"/></td>

    </tr>

    <tr>
      <td>CARGA HOR&Aacute;RIA</td>
      <td><input name="ch" type="text" class="input-xlarge" id="ch" placeholder="" title="O campo carga horária &eacute; obrigat&oacute;rio"/></td>
    </tr>
    <tr>
      <td>REMUNERA&Ccedil;&Atilde;O</td>
      <td><input name="remuneracao" type="text" class="input-xlarge" id="remuneracao" placeholder="" title="O campo remuneração &eacute; obrigat&oacute;rio"/></td>
    </tr>
    <tr>

      <td>REQUISITO</td>

      <td><textarea name="requisito" rows="5" class="input-xlarge" id="requisito" placeholder="" title="O campo remunera&ccedil;&atilde;o &eacute; obrigat&oacute;rio"></textarea></td>

    </tr>

  </table>

  <center>

  <div class="form-actions">

                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">

                              </i> SALVAR</button>

                                  <button type="button" class="btn" >CANCELAR</button>

                               <input name="ok" type="hidden" id="ok"/></div>

  </center>

</form>
