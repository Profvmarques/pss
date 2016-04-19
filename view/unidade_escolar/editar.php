<?php
require_once('controles/unidade_escolar.php');
Processo('editar');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="726" align="center">
    <tr>
      <td width="462">&nbsp;</td>
      <td width="252"><a href="default.php?pg=<?php echo base64_encode("view/unidade_escolar/consulta.php");?>&amp;form=<?php echo base64_encode("Consulta de Unidade escolar");?>"><strong><i class="icon-search"> Consultar Unidade Escolar </i></strong></a> </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="726" border="0" align="center">
    <tr>
      <td width="172">INEP  </td>
      <td width="544">
      <input name="inep" type="text" class="input-mini" id="inep" placeholder="" value="<?php echo @mysql_result($resultadoEditar,0,'inep');?>" title="O campo INEP &eacute; obrigat&oacute;rio"/>      </td>
    </tr>
    <tr>
      <td>UNIDADE ESCOLAR </td>
      <td><input name="descricao" type="text" class="input-xxlarge" id="descricao" placeholder="" value="<?php echo utf8_encode(@mysql_result($resultadoEditar,0,'descricao')); ?>" title="O campo Unidade Escolar &eacute; obrigat&oacute;rio"/></td>
    </tr>
    <tr>
      <td>RESPONS&Aacute;VEL</td>
      <td><input name="responsavel" type="text" class="input-xxlarge" id="responsavel" placeholder="" value="<?php echo @mysql_result($resultadoEditar,0,'responsavel'); ?>" title="O campo responsavel &eacute; obrigat&oacute;rio"/></td>
    </tr>
    <tr>
      <td>ENDERE&Ccedil;O</td>
      <td><input name="endereco" type="text" class="input-xxlarge" id="endereco" placeholder="" value="<?php echo @mysql_result($resultadoEditar,0,'endereco'); ?>" title="O campo endere&ccedil;o &eacute; obrigat&oacute;rio"/>        </td>
    </tr>
    <tr>
      <td>CEP</td>
      <td><input name="cep" type="text" class="input-medium" id="cep" placeholder="" value="<?php echo @mysql_result($resultadoEditar,0,'cep'); ?>" title="O campo CEP &eacute; obrigat&oacute;rio"/></td>
    </tr>
    <tr>
      <td>BAIRRO</td>
      <td><input name="bairro" type="text" class="input-xlarge" id="bairro" placeholder=""  value="<?php echo @mysql_result($resultadoEditar,0,'bairro'); ?>" /></td>
    </tr>
    <tr>
      <td>MUNIC&Iacute;PIO</td>
      <td><input name="municipio" type="text" class="input-xlarge" id="municipio" placeholder="" value="<?php echo@mysql_result($resultadoEditar,0,'municipio'); ?>" /></td>
    </tr>
    <tr>
      <td>UF</td>
      <td><select name="uf" class="input-mini" id="uf">
          <option value="AC" class="textos">AC</option>
          <option value="AL" class="textos">AL</option>
          <option value="AP" class="textos">AP</option>
          <option value="AM" class="textos">AM</option>
          <option value="BA" class="textos">BA</option>
          <option value="CE" class="textos">CE</option>
          <option value="DF" class="textos">DF</option>
          <option value="GO" class="textos">GO</option>
          <option value="ES" class="textos">ES</option>
          <option value="MA" class="textos">MA</option>
          <option value="MT" class="textos">MT</option>
          <option value="MS" class="textos">MS</option>
          <option value="MG" class="textos">MG</option>
          <option value="PA" class="textos">PA</option>
          <option value="PB" class="textos">PB</option>
          <option value="PR" class="textos">PR</option>
          <option value="PE" class="textos">PE</option>
          <option value="PI" class="textos">PI</option>
          <option value="RJ" class="textos">RJ</option>
          <option value="RN" class="textos">RN</option>
          <option value="RS" class="textos">RS</option>
          <option value="RO" class="textos">RO</option>
          <option value="RR" class="textos">RR</option>
          <option value="SP" class="textos">SP</option>
          <option value="SC" class="textos">SC</option>
          <option value="SE" class="textos">SE</option>
          <option value="TO" class="textos">TO</option>
      </select></td>
    </tr>
    
    <tr>
      <td>TELEFONE</td>
      <td>
        <input name="telefone" type="text" class="input-medium" id="telefone" title="Campo telefone &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo @mysql_result($resultadoEditar,0,'telefone'); ?>" maxlength="15" placeholder="" />      </td>
    </tr>
    <tr>
      <td>CELULAR</td>
      <td>
        <input name="celular" type="text" class="input-medium" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo @mysql_result($resultadoEditar,0,'celular'); ?>" maxlength="15" placeholder="" />      </td>
    </tr>
    <tr>
      <td>E-MAIL</td>
      <td>
        <input name="email" type="text" class="input-xlarge" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo @mysql_result($resultadoEditar,0,'email'); ?>"  title="O campo e-mail &eacute; obrigat&oacute;rio"/>      </td>
    </tr>
    <tr>
      <td>DISTRITO</td>
      <td>
        <select name="iddistrito" class="input-medium" id="iddistrito" title="O campo distrito &eacute; obrigat&oacute;rio">
          <?php for($i=0;$i<$linha;$i++){ ?>
          <option value="<?php echo mysql_result($rs,$i,'iddistrito');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php } ?>
        </select>      </td>
    </tr>
  </table>
  <div class="form-actions">
                                  <div align="center">
                                    <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                    </i> SALVAR</button>
                                    <button type="button" class="btn" >CANCELAR</button>
                                    <input name="ok" type="hidden" id="ok"/>
                                  </div>
  </div>
</form>
<script>
document.form.uf.value='<?php echo @mysql_result($resultadoEditar,0,'uf');?>';
document.form.iddistrito.value='<?php echo @mysql_result($resultadoEditar,0,'iddistrito');?>';
</script>