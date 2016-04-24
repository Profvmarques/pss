<?php
require_once('controles/unidade_escolar.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<table width="1010">
  <tr>
    <td width="807">&nbsp;</td>
    <td width="191"><a href="default.php?pg=view/unidade_escolar/incluir.php&form=Cadastro de Unidade Escolar"><strong> <i class="icon-plus-sign">  Nova Unidade Escolar </i> </strong></a></td>
  </tr>
</table>
<br />
<br />

                                <div class="control-group">
                                  <label class="control-label">UNIDADE ESCOLAR </label>
                                  <div class="controls">
                                    <input name="descricao" type="text" class="input-xxlarge" id="descricao" placeholder="" title="O campo unidade escolar é obrigatório" />
									
									<button type="button" onClick="validar(document.form);"> <i class="icon-search"></i></button><input name="ok" type="hidden" id="ok"/>
                                  </div>
                                </div>
								<?php if($linha>0){?>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="113">INEP</th>
                                      <th width="398">UNIDADE ESCOLAR </th>
                                      <th width="150">TELEFONE</th>
                                      <th width="215">E-MAIL</th>
                                      <th width="125">DISTRITO</th>
                                      <th width="63">Ac&atilde;o</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo mysql_result($rs,$i,'ue.inep');?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'ue.descricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'ue.telefone'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'ue.email'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs,$i,'d.descricao'));?></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=<?php echo base64_encode("view/unidade_escolar/editar.php");?>&form=<?php echo base64_encode("Atualizar Cadastro de Unidade Escolar");?>&id=<?php echo mysql_result($rs,$i,'ue.idunidade_escolar');?>"><i class="icon-edit"></i></a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
								<?php }elseif($_POST['ok']=='true'){
?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/unidade_escolar/incluir.php&form=Novo Cadastro de Unidade Escolar"><strong> <i class="icon-plus-sign">  Cadastrar novo de Unidade Escolar </i> </strong></a></h4></center></p>
                                        </div>
			<?php }?>
</form>