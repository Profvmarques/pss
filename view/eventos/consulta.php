<?php
require_once('controles/eventos.php');
Processo('consulta');
?>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo siglacurso  
         $("select[name=siglacurso]").change(function(){
            
			$("select[name=idperiodoletivo]").html('<option value="">Carregando Período Letivo...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_periodoletivo.php",
                  {siglacurso:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idperiodoletivo]").html(valor);
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <br />
  <table width="1010">
  <tr>
    <td width="594">&nbsp;</td>
    <td width="404"><a href="default.php?pg=view/evento_periodo_letivo/incluir.php&amp;form=Novo Cadastro de Eventos do Período Letivo&siglacurso=<?php echo $_POST['siglacurso'];?>&idperiodoletivo=<?php echo $_POST['idperiodoletivo'];?>"><strong> <i class="icon-plus-sign"> Cadastrar novo Evento do período letivo </i> </strong></a> </td>
  </tr>
</table>
  <?php if($linha>0){?>
  <br />
<fieldset style="background: none repeat scroll 0 0 #AECEF4;
    font-size: 100%; border: 1px solid #000000;">
<legend style="border: 1px solid #000000; background:#FFFFFF">            Relação de cadastro dos Eventos <b></b></legend>
        <br>

<div style="margin-left:15px; background:#AECEF4">
  <table width="100%" class="table table-advance" id="table1">
              <thead>
                <tr>
                  <th width="280">Evento</th>
                  <th width="155">Data de In&iacute;cio </th>
                  <th width="146">Data de T&eacute;rmino </th>
                  <th width="237">Situação</th>
                  <th colspan="2">A&ccedil;&atilde;o</th>
                </tr>
              </thead>
              <tbody>
                <?php for($i=0;$i<$linha;$i++){?>
                <tr class="table-flag-blue">
                  <td><?php echo mysql_result($rs,$i,'e.descricao');?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'inicio'));?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'final'));?></td>
                  <td><?php echo utf8_encode(mysql_result($rs,$i,'e.situacao'));?></td>
                  <td width="62"><a class="btn btn-small show-tooltip" title="Editar" href="default.php?pg=view/eventos/editar.php&form=Atualizar Cadastro Evento&id=<?php echo mysql_result($rs,$i,'e.ideventos');?>"><i class="icon-edit"></i></a></td>
                  <td width="68"><a class="btn btn-small show-tooltip" title="Editar" href="#" onclick="document.form.ok.value='excluir',submit();"><i class="icon-trash"></i></a></td>
                </tr>
                <?php }?>
              </tbody>
  </table>
			
</div>
</fieldset>
</div>
<?php }elseif($_POST['ok']=='true'){
?>
										<div class="alert alert-error">
                                            <button data-dismiss="alert" class="close">×</button>
                                            <h4>Mensagem!</h4>
                                            <p>Nenhum registro encontrado <center> <h4><a href="default.php?pg=view/evento_periodo_letivo/incluir.php&form=Novo Cadastro de Eventos do Período Letivo&siglacurso=<?php echo $_POST['siglacurso'];?>&idperiodoletivo=<?php echo $_POST['idperiodoletivo'];?>"><strong> <i class="icon-plus-sign">  Cadastrar novo Evento do período letivo </i> </strong></a></h4></center></p>
                                        </div>
										<?php }?>
								<br />
								<br />
</form>