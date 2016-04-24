<?php
require_once('controles/usuarios.php');
Processo('incluir');
?>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="726" align="center">
    <tr>
      <td width="817">&nbsp;</td>
      <td width="181"><a href="default.php?pg=<?php echo base64_encode('view/usuarios/consulta.php');?>&form=<?php echo base64_encode('Consulta de Usu&aacute;rios');?>"><strong><i class="icon-search"> Consultar Usu&aacute;rios </i></strong></a> </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="726" border="0" align="center">
    <tr>
      <td width="161">NOME  </td>
      <td width="555">
        <input name="nome" type="text" class="input-xlarge" id="nome" placeholder="" />      </td>
    </tr>
    <tr>
      <td>LOGIN</td>
      <td><input name="login" type="text" class="input-medium" id="login" placeholder="" /></td>
    </tr>
    <tr>
      <td>SENHA</td>
      <td><input name="senha" type="password" class="input-medium" id="senha" placeholder="" /></td>
    </tr>
    <tr>
      <td>E-MAIL</td>
      <td><input name="email" type="text" class="input-xlarge" id="email" placeholder="" /></td>
    </tr>
    <tr>
      <td>PERFIL</td>
      <td><span style="margin-left:auto">
        <select name="idperfil" class="input-medium" id="idperfil" title="O campo perfil &eacute; obrigat&oacute;rio">
          <?php for($i=0;$i<$linha;$i++){ ?>
          <option value="<?php echo mysql_result($rs,$i,'idperfil');?>"><?php echo utf8_encode(mysql_result($rs,$i,'descricao'));?></option>
          <?php } ?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td>UNIDADE ESCOLAR </td>
      <td><span style="margin-left:auto">
        <select name="idunidade_escolar" class="input-xxlarge" id="idunidade_escolar" title="O campo perfil &eacute; obrigat&oacute;rio">
          <?php for($i=0;$i<$linha2;$i++){ ?>
          <option value="<?php echo mysql_result($rs2,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php } ?>
        </select>
      </span></td>
    </tr>
    <tr>
      <td>SITUA&Ccedil;&Atilde;O </td>
      <td><span style="margin-left:auto">
        <select name="situacao" class="input-medium" id="situacao" title="O campo situa&ccedil;&atilde;o &eacute; obrigat&oacute;rio">
          
          <option value="ATIVO">ATIVO</option>
		  <option value="INATIVO">INATIVO</option>
        </select>
      </span></td>
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