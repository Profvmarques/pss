<?php
require_once('controles/usuarios.php');
Processo('alterarsenha');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="397" border="0">
    <tr>
      <td width="169">LOGIN</label></td>
      <td width="218"><strong>
        <?php echo mysql_result($resultadoEditar,0,'login');?>
      </strong></td>
    </tr>
    <tr>
      <td>PERFIL</td>
      <td><strong><?php echo mysql_result($resultadoEditar,0,'perfil.descricao');?></strong></td>
    </tr>
    <tr>
      <td>E-MAIL</td>
      <td><strong><?php echo @mysql_result($resultadoEditar,0,'email');?></strong></td>
    </tr>
    <tr>
      <td width="169">SENHA </td>
      <td>
        <input name="senha" type="password" class="input-medium" id="senha" placeholder="" value="" title="O campo senha é obrigatório"/>      </td>
    </tr>
  </table>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" onclick="javascript:history.back()" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
</form>
