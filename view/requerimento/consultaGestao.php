<?php
require_once('controles/requerimento.php');
Processo('consulta');
?>
<form class="form-horizontal" id="form" name="form" method="post">
<?php if($linhaGestor>0){?>
<center>
<button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> VALIDAR</button>
                              <br />
                              </center>
  <table width="99%" class="table table-advance" id="table1">
                                  <thead>
                                    <tr>
                                      <th width="24"><input type="checkbox"></th>
                                      <th width="58">Data / Hora </th>
                                      <th width="177">Descrição </th>
                                      <th width="92">Inscrição</th>
                                      <th width="118">Candidato</th>
                                      <th width="118">Resposta</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php for($i=0;$i<$linhaGestor;$i++){?>
                                    <tr class="table-flag-blue">
                                      <td width="24"><input name="ch<?php echo $i;?>" type="checkbox" id="ch<?php echo $i;?>"></td>
                                      <td><?php echo utf8_encode(mysql_result($rsGestor,$i,'dh'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rsGestor,$i,'r.descricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rsGestor,$i,'i.idinscricao'));?></td>
                                      <td><?php echo utf8_encode(mysql_result($rsGestor,$i,'i.nome'));?></td>
                                      <td><textarea name="resposta<?php echo $i;?>" rows="5" class="input-xlarge" id="resposta<?php echo $i;?>" placeholder="" ></textarea></td>
                                    </tr>
									<?php }?>
                                  </tbody>
  </table> 
   <center>
  <div class="form-actions">
                                  <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> VALIDAR</button>
                                
                               <input name="ok" type="hidden" id="ok"/></div>
  </center>
								<?php }else{?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Não há registros <center>
                                        </div>
										<?php }?>
  <div class="control-group">
    <label class="control-label"></label>
  </div>
                                <div class="control-group"><div class="control-group"></div>
                                  <div class="controls"></div>
  </div>

</form>