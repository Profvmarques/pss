<?php
require_once('controles/candidatos.php');
Processo('atualizacao');
?>
<script type='text/javascript' src='js/jquery-1.7.2.min.js'></script>
        <script type='text/javascript' src='http://faeterj-caxias.net/sgm/js/cep.js'></script>
		 <script type='text/javascript' src='http://faeterj-caxias.net/sgm/js/idade.js'></script>
		 
		 <script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO PARA SEGMENTO ESCOLAR*****************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idtipo_segmento]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idsegmento_escolar]").html('<option value="">Carregando segmento escolar...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_segmento_escolar.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idtipo_segmento:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idsegmento_escolar]").html(valor);					
					 
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
	   
	    // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR*****************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idsegmento_escolar]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idunidade_escolar]").html('<option value="">Carregando unidade escolar...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_unidade_escolar.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idsegmento_escolar:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idunidade_escolar]").html(valor);					
					 
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
	   function desabilitarEcsola(){	  	
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		
	   }
	   
	    function habilitarEcola2(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
			tipoinscricao=<?php echo base64_decode($_GET['ti']);?>;
		
		if((segmento>6 && segmento<15 && tipo==1 && tipoinscricao==2) || (segmento>=2 && segmento<=5 && tipo==2 && tipoinscricao==2) || (tipo==4)){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').title="O campo unidade escolar é obrigatório";
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		  document.getElementById('idunidade_escolar').title="";
		}   
	   
	   function habilitarEcola(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
			tipoinscricao=document.form.idtipoinscricao.value;
		
		if(segmento>6 && segmento<15 && tipo==1 && tipoinscricao==2){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').style.visibility='visible';
		  document.getElementById('idunidade_escolar').title="O campo unidade escolar é obrigatório";
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		}   
		
	   
	   } 
	   }
	   
</script>

<form class="form-horizontal" id="form" name="form" method="post">
  <br />
  
											
											
											
  <table width="1010">
    <tr>
      <td width="331">PROTOCOLO </td>
      <td>NOME &nbsp;</td>
    </tr>
  </table>
  <br />
  <div style="margin-left:auto">
               &nbsp;SEGMENTO &nbsp;  
                                            <select name="idtipo_segmento" class="input-medium" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar é obrigatório" onchange="desabilitarEcsola()">
                                              <option value="">Escolha o tipo de segmento</option>
                                              <?php for($i=0;$i<$linha2;$i++){?>
                                              <option value="<?php echo mysql_result($rs2,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
                                              <?php }?>
                                            </select>
                                            &nbsp;
                                            ANO &nbsp;
                                            <select name="idsegmento_escolar" class="input-medium" tabindex="1" id="idsegmento_escolar" title="O campo segmento escolar é obrigatório" onchange="habilitarEcola2();">
                                              <option value="">Escolha o segmento escolar</option>
                                            </select>
											
											<span id="tdidunidade_escolar" style="visibility:hidden;">ESCOLA PRETENDIDA
                                              <select name="idunidade_escolar" class="input-xxlarge" id="idunidade_escolar">
                                                <?php for($i=0;$i<$linha4;$i++){ ?>
                                                <option value="<?php echo mysql_result($rs4,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
                                                <?php } ?>
                                              </select>
    </span>


  </div>
  <br />
  <br />
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
document.form.idtipoinscricao.value='<?php echo $_POST['idtipoinscricao']?>';
document.form.idtipo_segmento.value='<?php echo $_POST['idtipo_segmento']?>';
document.form.idsegmento_escolar.value='<?php echo $_POST['idsegmento_escolar']?>';
document.form.sexo.value='<?php echo $_POST['sexo']?>';
document.form.idrendafamiliar.value='<?php echo $_POST['idrendafamiliar']?>';
</script>