<?php
require_once('controles/vagas.php');
Processo('incluir');
?>

<script type="text/javascript">
$(function () {
	function removeCampo() {
		$(".removerCampo").unbind("click");
		$(".removerCampo").bind("click", function () {
			if($("tr.linhas").length > 1){
				$(this).parent().parent().remove();
			}
		});
	}
	//removeCampo();
	$(".adicionarCampo").click(function () {
		novoCampo = $("tr.linhas:first").clone();
		novoCampo.find("input").val("");
		novoCampo.insertAfter("tr.linhas:last");
		removeCampo();
	});
});
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <p>&nbsp;</p>
  <table width="1010" border="0" align="center">
    <tr>
      <td class="control-group">EVENTO : <span class="controls">
        <select name="ideventos" class="input-xxlarge" id="ideventos" title="O campo sistema é obrigatório">
          <option value="">Escolha o Evento</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'ideventos');?>"><?php echo mysql_result($rs,$i,'descricao');?></option>
          <?php }?>
        </select>
      </span></td>
    </tr>
  </table>
  <br />

  <table width="1060" align="center">
    <tr>
      <td width="167" bgcolor="#CCCCCC"><span class="control-group"><strong>UNIDADE ESCOLAR </strong></span></td>
      <td width="237" bgcolor="#CCCCCC"><span class="control-group"><strong>TIPO DE SEGMENTO</strong></span></td>
      <td width="219" bgcolor="#CCCCCC"><span class="control-group"><strong>SEGMENTO ESCOLAR </strong></span></td>
      <td width="113" bgcolor="#CCCCCC"><span class="control-group"><strong>TIPO VAGA </strong></span></td>
      <td width="36" bgcolor="#CCCCCC"><strong>TURNO</strong></td>
      <td colspan="3" bgcolor="#CCCCCC"><span class="control-group"><strong>VAGAS</strong></span></td>
    </tr>
	  
    <tr class="linhas">
      <td >
        <select name="idunidade_escolar[]" class="input-medium" tabindex="1" id="idunidade_escolar[]" title="O campo sistema é obrigatório">
          <option value="">Escolha a unidade escolar</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
      <td>
        <select name="idtipo_segmento[]" class="input-medium" id="idtipo_segmento[]" title="O campo Segmento Escolar é obrigatório">
          <option value="">Escolha o tipo de segmento escolar</option>
          <?php for($i=0;$i<$linha4;$i++){?>
          <option value="<?php echo mysql_result($rs4,$i,'idsegmento_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
      <td>
        <select name="idsegmento_escolar[]" class="input-medium" id="idsegmento_escolar[]" title="O campo Segmento Escolar é obrigatório">
          <option value="">Escolha o segmento escolar</option>
          <?php for($i=0;$i<$linha3;$i++){?>
          <option value="<?php echo mysql_result($rs3,$i,'idsegmento_escolar');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
          <?php }?>
        </select>      </td>
      <td>
        <select name="tipovaga[]" class="input-medium" id="tipovaga[]" title="O campo Segmento Escolar é obrigatório">
          <option value="INSCRICAO">INSCRIÇÃO</option>
          <option value="INSCRICAO_CCAIC">INSCRIÇÃO CCAIC</option>
          <option value="INSCRICAO_CAMPO">INSCRIÇÃO CAMPO</option>
          <option value="TRANSFERENCIA">TRANSFERÊNCIA</option>
        </select>      </td>
      <td><select name="idturno[]" class="input-medium" id="idturno[]" title="O campo Segmento Escolar é obrigatório">
        <option value="1">MANHÃ</option>
        <option value="2">VESPERTINO</option>
		<option value="3">NOTURNO</option>
      </select></td>
      <td width="39">
        <input name="totalvagas[]" type="text" class="input-mini" id="totalvagas[]" placeholder="" value="<?php echo $_POST['totalvagas'];?>" />      </td>
      <td width="39"><a href="#" class="removerCampo" title="Remover linha"><i class="icon-trash"></i>Remover</a></td>
      <td width="39">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="8" class="linhas"><center><a href="#" class="adicionarCampo" title="Adicionar item"><i class="icon-plus-sign"></i>Adicionar</a></center></td>
    </tr>
  </table>
  <p><br />
  </p>
  <p align="center">
    <button type="button" class="btn btn-primary" onclick="validar(document.form);"> </i> SALVAR</button>
    <button type="button" class="btn" >CANCELAR</button>
    <input name="ok" type="hidden" id="ok"/>
</p>
</form>
<script>
document.form.ideventos.value=<?php echo $_POST['ideventos'];?>;
document.form.idunidade_escolar.value=<?php echo $_POST['idunidade_escolar'];?>;
document.form.idunidade_escolar.value=<?php echo $_POST['idunidade_escolar'];?>;
document.form.idunidade_escolar.value=<?php echo $_POST['idunidade_escolar'];?>;
</script>
