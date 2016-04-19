<?php
require_once('controles/vagas.php');
Processo('editar');
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
  <p>&nbsp;</p>
  <table width="1010" border="0" align="center">
    <tr>
      <td class="control-group"><strong>EVENTO </strong>
        <select name="ideventos" class="input-xlarge" id="ideventos" title="O campo evento é obrigatório">
          <option value="">Escolha o Evento</option>
          <?php for($i=0;$i<$linha;$i++){?>
          <option value="<?php echo mysql_result($rs,$i,'ideventos');?>"><?php echo mysql_result($rs,$i,'descricao');?></option>
          <?php }?>
        </select> 
        <strong>UNIDADE ESCOLAR</strong> <span style="margin-left:auto">
        <select name="idunidade_escolar" class="input-xlarge" id="idunidade_escolar" title="O campo unidade escolar é obrigatório">
          <?php for($i=0;$i<$linha2;$i++){ ?>
          <option value="<?php echo mysql_result($rs2,$i,'ue.idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'ue.descricao'));?></option>
          <?php } ?>
        </select>
        </span>      </td>
    </tr>
    <tr>
      <td class="control-group"><span style="margin-left:auto"><strong>TIPO DE INSCRIÇÃO</strong> &nbsp;
        <select name="tipovaga" class="input-medium" id="tipovaga" title="O campo Segmento Escolar é obrigatório">
          <option value="INSCRICAO">INSCRIÇÃO</option>
          <option value="INSCRICAO_CCAIC">INSCRIÇÃO CCAIC</option>
          <option value="INSCRICAO_CAMPO">INSCRIÇÃO CAMPO</option>
          <option value="INSCRICAO_FASE1">INSCRICÃO FASE1</option>
          <option value="TRANSFERENCIA">TRANSFERÊNCIA</option>
	  <option value="TRANSFERENCIA_INTERNA">TRANSFERÊNCIA INTERNA</option>
        </select>
        &nbsp;<strong>SEGMENTO</strong> &nbsp;
<select name="idtipo_segmento" class="input-xlarge" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar é obrigatório" >
  <option value="">Escolha o tipo de segmento</option>
  <?php for($i=0;$i<$linha4;$i++){?>
  <option value="<?php echo mysql_result($rs4,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
  <?php }?>
</select>
      <strong>TURNO</strong> 
      <select name="idturno" class="input-medium" id="idturno" title="O campo Segmento Escolar é obrigatório">
        <option value="1">MANHÃ</option>
        <option value="2">VESPERTINO</option>
        <option value="3">NOTURNO</option>
      </select>
      </span></td>
    </tr>
    <tr>
      <td class="control-group"><input name="acao" type="hidden" id="acao"/></td>
    </tr>
    <tr>
      <td class="control-group"><center><button type="button" class="btn btn-primary" onclick="validar2(document.form);"> </i> PESQUISAR</button></center></td>
    </tr>
  </table>
  <br />
  <?php  if($_POST['acao'] == 'true') {
          if($linha3 > 0) {
    ?>
  <table width="680" align="center">
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,0,'ue.descricao'));?></strong></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong><?php echo utf8_encode(mysql_result($rs3,0,'ts.descricao'))." - ".utf8_encode(mysql_result($rs3,0,'t.descricao'));?> </strong></div></td>
    </tr>
    <tr>
      <td width="435" bgcolor="#CCCCCC"><strong>ANO ESCOLAR </strong></td>
      <td width="233" bgcolor="#CCCCCC"><strong>TOTAL DE VAGAS </strong></td>
    </tr>
	<?php for($i=0;$i<$linha3;$i++){?>
    <tr>
      <td><?php echo mysql_result($rs3,$i,'se.descricao');?></td>
      <td><label>
        <input name="totalvagas<?php echo $i;?>" type="text" class="input-mini" id="totalvagas<?php echo $i;?>" value="<?php echo mysql_result($rs3,$i,'v.totalvagas');?>"/>
        <input name="idsegmento_escolar<?php echo $i;?>" type="hidden" id="idsegmento_escolar<?php echo $i;?>" value="<?php echo mysql_result($rs3,$i,'v.idsegmento_escolar');?>"/>
      </label></td>
    </tr>
	 <?php  }?>
  </table>
  <?php  }else{?>
     Não há vagas lançadas para a unidade, segmento escolar e truno escolhido!
  <?php  }?>
  <p align="center">
    <button type="button" class="btn btn-primary" onclick="validar(document.form);"> </i> ATUALIZAR</button>
    
    <input name="ok" type="hidden" id="ok"/>
    <?php  }?>
  </p>
</form>
<script>
document.form.ideventos.value='<?php echo $_POST['ideventos'];?>';
document.form.idunidade_escolar.value='<?php echo $_POST['idunidade_escolar'];?>';
document.form.tipovaga.value='<?php echo $_POST['tipovaga'];?>';
document.form.idtipo_segmento.value=<?php echo $_POST['idtipo_segmento'];?>;
document.form.idturno.value='<?php echo $_POST['idturno'];?>';
document.form.acao.value='<?php echo $_POST['acao'];?>';
</script>
