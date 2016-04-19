<?php
require_once('controles/segmento_escolar.php');
Processo('incluir');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1010">
    <tr>
      <td width="738">&nbsp;</td>
      <td width="260"><a href="default.php?pg=view/segmento_escolar/consulta.php&amp;form=Consulta de Segmento Escolar"><strong><i class="icon-search"> Consultar Segmento Escolar </i></strong></a> </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1010" border="0" align="center">
    <tr>
      <td class="control-group">TIPO DE SEGMENTO </td>
      <td><span class="controls">
        <select name="idtipo_segmento" class="input-xlarge" tabindex="1" id="idtipo_segmento" title="O campo sistema é obrigatório">
          <option value="">Escolha o tipo de segmento</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td width="209" class="control-group">SEGMENTO </td>
      <td width="791"><span class="controls">
        <input name="descricao" type="text" class="input-xxlarge" id="descricao" placeholder="" value="<?php echo $_POST['descricao'];?>" />
      </span></td>
    </tr>
  </table>
  <p align="center">
    <button type="button" class="btn btn-primary" onclick="validar(document.form);"> </i> SALVAR</button>
    <button type="button" class="btn" >CANCELAR</button>
    <input name="ok" type="hidden" id="ok"/>
</p>
</form>
