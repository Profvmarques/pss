<?php
require_once('controles/relatorios.php');
Processo('consultaQuantitativoCandidatoCreche');
?>
		 
		 <script type="text/javascript">
 // COMENT�RIO DESSA FUN��O *********************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idtipo_segmento]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idmodulos]").html('<option value="">Carregando segmento escolar...</option>');
            // Exibimos o campo sistemas antes de selecionamos o m�dulo, serve tamb�m em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// sele��o antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_segmento_escolarRel.php",
                  {idtipo_segmento:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idsegmento_escolar]").html(valor);					
					 
                  }
                  )
         });
	  });      	  
	   // COMENT�RIO DESSA FUN��O *********************************
	  
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <br />
<br />

                                <div class="control-group"><br />
								  <div class="controls">
								  UNIDADE ESCOLAR <span style="margin-left:auto">
								  <select name="idunidade_escolar" class="input-medium" id="idunidade_escolar" title="O campo unidade escolar &eacute; obrigat&oacute;rio">
                                    <?php for($i=0;$i<$linha4;$i++){ ?>
                                    <option value="<?php echo mysql_result($rs4,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
                                    <?php } ?>
                                  </select>
								  </span>SEGMENTO ESCOLAR 
								    <select name="idtipo_segmento" class="input-medium" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar &eacute; obrigat&oacute;rio">
                                    <option value="">Escolha o tipo de segmento</option>
                                    <?php for($i=0;$i<$linha2;$i++){?>
                                    <option value="<?php echo mysql_result($rs2,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
                                    <?php }?>
                                  </select>
								  ANO &nbsp;
                                  <select name="idsegmento_escolar" class="input-xlarge" tabindex="1" id="idsegmento_escolar"  >
                                    <option value="">Escolha o segmento escolar</option>
                                  </select>
                                  
                                  <input name="ok" type="hidden" id="ok"/>
                                  </div>
  </div>
								<br />
								<div class="controls"><span style="margin-left:auto"> DATA INICIAL
								  <input name="dtini" type="text" class="input-medium" id="dtini" onkeypress="return Mascaras_Format(document.form,'dtini','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.dtini,5);" value="<?php echo $_POST['dtini']; ?>"  title="O campo data inicial &eacute; obrigat&oacute;rio" />
                                      <span class="textos_red"><a title="Calend&aacute;rio" onclick="selectDate('form','dtini')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span>&nbsp;&nbsp;<span style="margin-left:auto">DATA DE T&Eacute;RMINO
                                        <input name="dtfim" type="text" class="input-medium" id="dtfim" onkeypress="return Mascaras_Format(document.form,'dtfim','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.dtfim,5);" value="<?php echo $_POST['dtfim']; ?>"  title="O campo data de t&eacute;rmino &eacute; obrigat&oacute;rio" />
                                      <span class="textos_red"><a title="Calend&aacute;rio" onclick="selectDate('form','dtfim')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span>
                                      <button type="button" onclick="validar(document.form);"> <i class="icon-search"> BUSCAR</i></button>
  </div>
								<br />
								<center>
								</center>
</form>