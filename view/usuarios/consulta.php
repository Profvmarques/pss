<?php
require_once('controles/usuarios.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<table width="1010">
  <tr>
    <td width="834">&nbsp;</td>
    <td width="164"><a href="default.php?pg=<?php echo base64_encode('view/usuarios/incluir.php');?>&form=<?php echo base64_encode('Cadastro de Usu&aacute;rios');?>"><strong> <i class="icon-plus-sign">  Novo Usu&aacute;rios </i> </strong></a></td>
  </tr>
</table>
<br />
<br />

                                <div class="control-group">
                                  <label class="control-label">Usu&aacute;rio </label>
                                  <div class="controls">
                                    <input name="nome" type="text" class="input-xxlarge" id="nome" placeholder="" title="O curso é obrigatório" />
									
									<button type="button" onClick="validar(document.form);"> <i class="icon-search"></i></button>
                                  </div>
                                </div>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="500">Nome</th>
                                      <th width="174">Login </th>
                                      <th width="327">Unidade Escolar  </th>
                                      <th width="88">Ac&atilde;o</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo mysql_result($rs,$i,'u.nome');?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'u.login'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'ue.descricao'));?></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=<?php echo base64_encode('view/usuarios/editar.php');?>&form=<?php echo base64_encode('Atualizar Cadastro de Usu&aacute;rios');?>&id=<?php echo mysql_result($rs,$i,'u.idusuarios');?>"><i class="icon-edit"></i></a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
								<br />
								<br />
  <div class="control-group">
    <label class="control-label"></label>
  </div>
                                <div class="control-group"><div class="control-group"></div>
                                  <div class="controls"></div>
  </div>
  <center>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/></div>
  </center>
</form>