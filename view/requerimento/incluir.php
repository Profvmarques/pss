<?php
require_once('controles/requerimento.php');
Processo('incluir');
?>



<form class="form-horizontal" id="form" name="form" method="post">
  <p>&nbsp;</p>

  <table width="684" border="0" align="center">

    <tr>

      <td width="263">INSCRI&Ccedil;&Atilde;O</td>

      <td width="411"><?php echo mysql_result($rsEdt,0,'idinscricao');?></td>

    </tr>

    <tr>
      <td>CANDIDATO</td>
      <td><?php echo mysql_result($rsEdt,0,'nome');?></td>
    </tr>
    <tr>

      <td>MANIFESTO</td>

      <td><textarea name="descricao" rows="5" class="input-xlarge" id="descricao" placeholder="" title="O campo remunera&ccedil;&atilde;o &eacute; obrigat&oacute;rio"></textarea></td>

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
