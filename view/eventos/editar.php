﻿<?php
require_once('controles/eventos.php');
Processo('editar');
?>

<form class="form-horizontal" id="form" name="form" method="post">
  <table width="684" border="0" align="center">
    <tr>
      <td width="263">EVENTO </td>
      <td width="411"><input name="descricao" type="text" class="input-xlarge" id="descricao" placeholder="" title="O campo evento é obrigatório" value="<?php echo mysql_result($rs8,0,'descricao');?>"/></td>
    </tr>
    <tr>
      <td>DATA DE IN&Iacute;CIO</td>
      <td>
        <input name="data_inicio" type="text" class="input-medium" id="data_inicio" onkeypress="return Mascaras_Format(document.form,'data_inicio','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_inicio,5);" value="<?php echo mysql_result($rs8,0,'inicio');?>"  title="O campo data de início é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_inicio')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
    </tr>
    <tr>
      <td>DATA DE TÉRMINO </td>
      <td>
        <input name="data_fim" type="text" class="input-medium" id="data_fim" onkeypress="return Mascaras_Format(document.form,'data_fim','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.data_fim,5);" value="<?php echo mysql_result($rs8,0,'final');?>"  title="O campo data de término é obrigatório"/>
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','data_fim')"><img src="img/calendar.gif" width="18" height="18" /></a></span></td>
    </tr>
    
    <tr>
      <td>SITUA&Ccedil;&Atilde;O</td>
      <td><select name="situacao" class="input-xlarge" id="situacao" title="O campo Situação é obrigatório">
          <option value="">Escolha a Situa&ccedil;&atilde;o</option>
          <option value="EM ANDAMENTO">EM ANDAMENTO</option>
          <option value="PROGRAMADO">PROGRAMADO</option>
          <option value="CANCELADO">CANCELADO</option>
        </select>
      </td>
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

<script>
document.form.situacao.value='<?php echo mysql_result($rs8,0,'situacao');?>';
</script>