<?php
require_once('controles/candidatos.php');
Processo('editar');
?>
<script type='text/javascript' src='js/jquery-1.7.2.min.js'></script>
        <script type='text/javascript' src='js/cep.js'></script>
		 <script type='text/javascript' src='js/idade.js'></script>
		 
		 <script type="text/javascript">
 // COMENTÁRIO DESSA FUNÇÃO *********************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idtipo_segmento]").change(function(){
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idmodulos]").html('<option value="">Carregando segmento escolar...</option>');
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_segmento_escolar.php",
                  {idtipo_segmento:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idsegmento_escolar]").html(valor);
                  }
                  )
         });
	  });      	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
</script>
<form class="form-horizontal" id="form" name="form" method="post">
  <table width="1039">
    <tr>
      <td width="174">TIPO DE INSCRIÇÃO &nbsp;
        <select name="idtipoinscricao" class="input-medium" id="idtipoinscricao">
          <option value="1">PRÉ-INSCRIÇÃO</option>
          <option value="2">TRANSFERÊNCIA</option>
        </select></td>
      <td width="474">TIPO DE SEGMENTO ESCOLAR  &nbsp;<span class="controls">
        <select name="idtipo_segmento" class="input-xlarge" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar é obrigatório">
          <option value="">Escolha o tipo de segmento</option>
          <?php for($i=0;$i<$linha2;$i++){?>
          <option value="<?php echo mysql_result($rs2,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
          <?php }?>
        </select>
      </span></td>
      <td width="375">SEGMENTO  <span class="controls">
        <select name="idsegmento_escolar" class="input-xlarge" tabindex="1" id="idsegmento_escolar" title="O campo segmento escolar é obrigatório">
          <option value="">Escolha o segmento escolar</option>
          
        </select>
      </span></td>
    </tr>
  </table>
  <br />
  
  <table width="1010">
    <tr>
      <td width="224">CPF &nbsp; 
      <input type="text" name="cpf" id="cpf" class="input-medium"  title="O campo cpf é obrigatório"  value="<?php echo $_POST['cpf']?>" />      </td>
      <td width="306">RG/ÓRGÃO &nbsp;
        <input type="text" name="rg" id="rg" class="input-medium" title="O campo rg é obrigatório" value="<?php echo $_POST['rg']?>"/>      </td>
      <td width="464">NOME &nbsp;
        <input name="nome" type="text" class="input-xlarge" id="nome" placeholder="" value="<?php echo $_POST['nome']?>"/></td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="209">SEXO &nbsp;
        <select name="sexo" class="input-mini" id="sexo">
		  <option value="M">M</option>
		  <option value="F">F</option>		
        </select></td>
      <td width="327">NASCIMENTO&nbsp;<span style="margin-left:auto">
        <input name="nascimento" type="text" class="input-medium" id="nascimento" onkeypress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"  title="O campo nascimento é obrigatório" />
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','nascimento')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span></td>
      <td width="458">IDADE &nbsp;
      <input type="text" name="idade2" id="idade2" class="input-mini"  title="O campo idade é obrigatório" value="<?php echo $_POST['idade']?>"/></td>
      <td width="458">ALTURA&nbsp;
        <input type="text" name="altura_aluno" id="altura_aluno" class="input-mini" value="<?php echo $_POST['altura_aluno']?>"/></td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="377">PAI &nbsp;
      <input name="pai" type="text" class="input-xlarge" id="pai" placeholder="" value="<?php echo $_POST['pai']?>"/></td>
      <td width="348">MÃE &nbsp;
      <input name="mae" type="text" class="input-xlarge" id="mae" placeholder="" value="<?php echo $_POST['mae']?>" /></td>
      <td width="269">CEP&nbsp;
        <input name="cep" type="text" class="input-mini" id="cep"  title="O campo cep é obrigatório" onkeypress="return Mascaras_Format(document.form,'cep','99999999',event);" value="<?php echo $_POST['cep']; ?>" maxlength="8" placeholder=""/></td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="405">ENDEREÇO&nbsp;
        <input name="endereco" type="text" class="input-xlarge" id="endereco" placeholder="" value="<?php echo $_POST['endereco']?>"/></td>
      <td width="219">NÚMERO&nbsp;
      <input name="numero" type="text" class="input-mini" id="numero" placeholder="" value="<?php echo $_POST['numero']?>"/></td>
      <td width="370">COMPLEMENTO
      <input name="complemento" type="text" class="input-medium" id="complemento" placeholder="" value="<?php echo $_POST['complemento']?>" /></td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="417">BAIRRO&nbsp;
      <input name="bairro" type="text" class="input-xlarge" id="bairro" placeholder=""  value="<?php echo $_POST['bairro']?>" /></td>
      <td width="388">CIDADE&nbsp;
      <input name="cidade" type="text" class="input-xlarge" id="cidade" placeholder="" value="<?php echo $_POST['cidade']?>" /></td>
      <td width="189">UF&nbsp;
      <input name="uf" type="text" class="input-mini" id="uf" placeholder="" value="<?php echo $_POST['uf']?>"/></td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="275">TELEFONE &nbsp;
          <input name="telefone" type="text" class="input-medium" id="telefone" title="Campo telefone é obrigatório" onkeypress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="15" placeholder="" />    </td>
      <td width="284">CELULAR &nbsp; <input name="celular" type="text" class="input-medium" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onkeypress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" /></td>
      <td width="435">E-MAIL: &nbsp;
        <input name="email" type="text" class="input-medium" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['email']; ?>"  title="O campo e-mail é obrigatório"/>
      </td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="421">RESPONSÁVEL&nbsp;
      <input name="responsavel" type="text" class="input-xlarge" id="responsavel" placeholder="" value="<?php echo $_POST['responsavel']?>" /></td>
      <td width="317">NÚMERO DE IRMÃOS &nbsp;
      <input name="num_irmaos" type="text" class="input-mini" id="num_irmaos" placeholder="" value="<?php echo $_POST['num_irmaos']?>"/></td>
      <td width="256">RENDA &nbsp;
        <select name="idrendafamiliar" class="input-medium" id="idrendafamiliar">
          
          <option value="">--</option>
		  <?php for($i=0;$i<$linha3;$i++){?>
          <option value="<?php echo mysql_result($rs3,$i,'idrendafamiliar');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
          <?php }?>
        </select></td>
    </tr>
  </table>
 <br />
 <table width="1010">
  <tr>
    <td>NECESSIDADE ESPECIAL : &nbsp;
      <input name="auditiva" type="checkbox" id="auditiva" />      &nbsp;
AUDITIVA &nbsp;
<input name="visual" type="checkbox" id="visual" />
&nbsp;
VISUAL &nbsp;
<input name="motora" type="checkbox" id="motora" />
&nbsp;
MOTORA &nbsp;
<input name="mental" type="checkbox" id="mental" />
&nbsp;
MENTAL </td>
  </tr>
  
</table>
</br>
<table width="1010">
    <tr>
      <td>UNIFORME
      <hr />
      <table width="1010">
        <tr>
          <td width="273">CAMISA&nbsp;
            <input name="camisa_aluno" type="text" class="input-mlarge" id="camisa_aluno" placeholder=""  value="<?php echo $_POST['camisa_aluno']?>" /></td>
          <td width="275">BERMUDA&nbsp;
            <input name="bermuda_aluno" type="text" class="input-mlarge" id="bermuda_aluno" placeholder="" value="<?php echo $_POST['bernuda_aluno']?>" /></td>
          <td width="196">PÉ&nbsp;
            <input name="pe_aluno" type="text" class="input-mini" id="pe_aluno" placeholder="" value="<?php echo $_POST['pe_aluno']?>"/></td>
          <td width="238">MEIAS&nbsp;
            <input name="meias_aluno" type="text" class="input-mini" id="meias_aluno" placeholder="" value="<?php echo $_POST['meias_aluno']?>"/></td>
        </tr>
      </table></td>
    </tr>
  </table>

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
document.form.idtipoinscricao.value='<?php echo @mysql_result($rs,0,'ti.idtipoinscricao');?>';
document.form.idtipo_segmento.value='<?php echo @mysql_result($rs,0,'i.idtipo_segmento');?>';
document.form.idsegmento_escolar.value='<?php echo @mysql_result($rs,0,'se.idsegmento_escolar');?>';
document.form.sexo.value='<?php echo @mysql_result($rs,0,'c.sexo');?>';
document.form.idrendafamiliar.value='<?php echo @mysql_result($rs,0,'i.idrendafamiliar');?>';
</script>