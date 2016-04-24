<?php
require_once('controles/vagas.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<table width="1010">
  <tr>
    <td width="815">&nbsp;</td>
    <td width="183"><a href="default.php?pg=view/vagas/incluir.php&form=Cadastro de Vagas de Unidade Escolar"><strong> <i class="icon-plus-sign">  Novo Vaga </i> </strong></a></td>
  </tr>
</table>


<p>&nbsp;</p>
<table width="1010" border="0" align="center">
  <tr>
    <td class="control-group">EVENTO</td>
    <td><span class="controls">
      <select name="ideventos" class="input-xxlarge" id="ideventos" title="O campo sistema é obrigatório">
        <option value="">Escolha o Evento</option>
        <?php for($i=0;$i<$linha;$i++){?>
        <option value="<?php echo mysql_result($rs,$i,'ideventos');?>"><?php echo mysql_result($rs,$i,'descricao');?></option>
        <?php }?>
      </select>
    </span></td>
  </tr>
  <tr>
    <td width="214" class="control-group">UNIDADE ESCOLAR </td>
    <td width="786"><span class="controls">
      <select name="idunidade_escolar" class="input-xxlarge" tabindex="1" id="idunidade_escolar" title="O campo sistema é obrigatório">
        <option value="">Escolha a unidade escolar</option>
        <?php for($i=0;$i<$linha2;$i++){?>
        <option value="<?php echo mysql_result($rs2,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
        <?php }?>
      </select>
    </span></td>
  </tr>
  <tr>
    <td class="control-group">TIPO DE SEGMENTO</td>
    <td><span class="controls">
      <select name="idtipo_segmento" class="input-xlarge" id="idtipo_segmento" title="O campo Segmento Escolar é obrigatório">
        <option value="">Escolha o tipo de segmento escolar</option>
        <?php for($i=0;$i<$linha4;$i++){?>
        <option value="<?php echo mysql_result($rs4,$i,'idsegmento_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
        <?php }?>
      </select>
    </span></td>
  </tr>
  <tr>
    <td class="control-group">SEGMENTO ESCOLAR </td>
    <td><span class="controls">
      <select name="idsegmento_escolar" class="input-xxlarge" id="idsegmento_escolar" title="O campo Segmento Escolar é obrigatório">
        <option value="">Escolha o segmento escolar</option>
        <?php for($i=0;$i<$linha3;$i++){?>
        <option value="<?php echo mysql_result($rs3,$i,'idsegmento_escolar');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
        <?php }?>
      </select>
    </span></td>
  </tr>
  <tr>
    <td colspan="2" class="control-group">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" class="control-group"><div align="center">
      <button type="button" onClick="validar(document.form);"> <i class="icon-search"> Pesquisa de Quantitativo de Vagas</i></button>
      <input name="ok" type="hidden" id="ok"/>
    </div></td>
    </tr>
</table>
<br />
<?php if($linha5>0){?>
								<table width="100%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="563">Unidade Escolar </th>
                                      <th width="319">Segmento Escolar </th>
                                      <th width="132">Total de Vagas  </th>
                                      <th width="58">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linha5;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td><?php echo utf8_encode(mysql_result($rs5,$i,'ue.descricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs5,$i,'se.descricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rs5,$i,'v.totalvagas'));?></td>
                                      <td><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/vagas/editar.php&form=Atualizar Cadastro de Vagas&ideventos=<?php echo mysql_result($rs5,$i,'v.ideventos');?>&idunidade_escolar=<?php echo mysql_result($rs5,$i,'v.idunidade_escolar');?>&idsegmento_escolar=<?php echo mysql_result($rs5,$i,'v.idsegmento_escolar');?>"><i class="icon-edit"></i></a></td>
                                    </tr>
									<?php }?>
                                  </tbody>
                                </table>
								<?php }elseif($_POST['ok']=='true'){
?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/vagas/incluir.php&form=Novo Cadastro de Vaga de Unidade Escolar"><strong> <i class="icon-plus-sign">  Cadastrar nova Vaga de Unidade Mediante Evento </i> </strong></a></h4>
                                            </center></p>
                                        </div>
<?php }?>
</form>