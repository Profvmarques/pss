<?php
require_once('controles/candidatos.php');
Processo('incluir');
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
			$("select[name=idsegmento_escolar]").html('<option value="">Carregando segmento escolar...</option>');
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
	   
	   function habilitarEcola(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
		
		if(segmento>=15 && segmento<=21 && tipo==4){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		}   
		
	   
	   }
</script>
<script src="../../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<form class="form-horizontal" id="form" name="form" method="post">
  <br />
  <div style="margin-left:auto">PRÉ-INSCRIÇÃO &nbsp;
    <select name="idtipoinscricao" class="input-medium" id="idtipoinscricao">
      <option value="1">MATRÍCULA</option>
      <option value="2">TRANSFERÊNCIA</option>
    </select>
                                            &nbsp;SEGMENTO &nbsp;  
                                            <select name="idtipo_segmento" class="input-xlarge" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar é obrigatório" onchange="habilitarEcola();">
                                              <option value="">Escolha o tipo de segmento</option>
                                              <?php for($i=0;$i<$linha2;$i++){?>
                                              <option value="<?php echo mysql_result($rs2,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'descricao'));?></option>
                                              <?php }?>
                                            </select>
                                            &nbsp;
                                            ANO &nbsp;
                                            <select name="idsegmento_escolar" class="input-xlarge" tabindex="1" id="idsegmento_escolar" title="O campo segmento escolar é obrigatório" onchange="habilitarEcola();">
                                              <option value="">Escolha o segmento escolar</option>
                                            </select>
  </div>
											<br />
  <table width="1010">
    <tr>
      <td width="331">RG/ÓRGÃO &nbsp;
        <input type="text" name="rg" id="rg" class="input-medium" title="O campo rg é obrigatório" value="<?php echo $_POST['rg']?>"/></td>
      <td>NOME &nbsp;
      <input name="nome" type="text" class="input-xxlarge" id="nome" placeholder="" value="<?php echo $_POST['nome']?>"/></td>
    </tr>
  </table>
  <br />
  <table width="1010">
    <tr>
      <td width="143">SEXO &nbsp;
        <select name="sexo" class="input-mini" id="sexo">
		  <option value="M">M</option>
		  <option value="F">F</option>		
        </select></td>
      <td width="274">NASCIMENTO&nbsp;<span style="margin-left:auto">
        <input name="nascimento" type="text" class="input-medium" id="nascimento" onkeypress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onblur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"  title="O campo nascimento é obrigatório" />
        <span class="textos_red"><a title="Calendário" onclick="selectDate('form','nascimento')"><img src="img/calendar.gif" width="18" height="18" /></a></span></span></td>
      <td width="299">IDADE &nbsp;
      <input type="text" name="idade" id="idade" class="input-mini"  title="O campo idade é obrigatório" value="<?php echo $_POST['idade']?>"/></td>
      <td width="274">ALTURA
        <input name="altura_aluno" type="text" class="input-mlarge" id="altura_aluno" placeholder="9,99"  value="<?php echo $_POST['altura_aluno']?>" />
        <span id="sprypassword1">
        <label for="password1"></label>
      <span class="passwordRequiredMsg">A value is required.</span></span>cm</td>
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
      <td width="317">CPF &nbsp;
        <input name="cpf" type="text" class="input-medium" id="cpf"  title="O campo cpf é obrigatório" onkeypress="return Mascaras_Format(document.form,'cpf','99999999999',event);" value="<?php echo $_POST['cpf']?>" onblur="TestaCPF(document.form.cpf.value);" maxlength="11" /></td>
      <td width="256">RENDA &nbsp;
        <select name="idrendafamiliar" class="input-medium" id="idrendafamiliar">
          
          <option value="">--</option>
		  <?php for($i=0;$i<$linha3;$i++){?>
          <option value="<?php echo mysql_result($rs3,$i,'idrendafamiliar');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
          <?php }?>
        </select></td>
    </tr>
  </table>
  <br /><table width="1010" id="tdidunidade_escolar" style="visibility:hidden">
    <tr>
      <td>ESCOLA PRETENDIDA <span style="margin-left:auto">
        <select name="idunidade_escolar" class="input-xxlarge" id="idunidade_escolar" title="O campo unidade escolar é obrigatório">
          <?php for($i=0;$i<$linha4;$i++){ ?>
          <option value="<?php echo mysql_result($rs4,$i,'idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>
          <?php } ?>
        </select>
      </span></td>
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
INTELECTUAL 
<input name="multipla" type="checkbox" id="multipla" />
&nbsp;
MULTIPLA </td>
  </tr>
</table>
</br>
<table width="1010">
  <tr>
    <td width="417">UNIFORME
      <hr />
      <table width="1010">
        <tr>
          <td width="250">CAMISA&nbsp;
<input name="camisa_aluno" type="text" class="input-mlarge" id="camisa_aluno" placeholder=""  value="<?php echo $_POST['camisa_aluno']?>" /></td>
          <td width="248">BERMUDA
            <input name="bermuda_aluno" type="text" class="input-mlarge" id="bermuda_aluno" placeholder="" value="<?php echo $_POST['bermuda_aluno']?>" /></td>
          <td width="226">            PÉ&nbsp;(Tênis)
            <input name="pe_aluno" type="text" class="input-mlarge" id="pe_aluno" placeholder="" value="<?php echo $_POST['pe_aluno']?>"/></td>
          <td width="266">MEIAS&nbsp;
            <input name="meias_aluno" type="text" class="input-mlarge" id="meias_aluno" placeholder="" value="<?php echo $_POST['meias_aluno']?>"/></td>
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






<p>&nbsp; </p>
<p>MODELO DE FORMULÁRIO NOVO</p>
<form>
  
  <!-- INÍCIO DAS GRADES RESPONSÍVAS -->
<div class="container">
  
  <div class="row">
  <div class="col-xs-12 col-md-8">01</div>
  <div class="col-xs-6 col-md-4">02</div>
</div>


<div class="row">
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>


<div class="row">
  <div class="col-xs-6">.col-xs-6</div>
  <div class="col-xs-6">.col-xs-6</div>
</div>


</div>
</form>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>




<p>&nbsp;</p>
<script>
document.form.idtipoinscricao.value='<?php echo $_POST['idtipoinscricao']?>';
document.form.idtipo_segmento.value='<?php echo $_POST['idtipo_segmento']?>';
document.form.idsegmento_escolar.value='<?php echo $_POST['idsegmento_escolar']?>';
document.form.sexo.value='<?php echo $_POST['sexo']?>';
document.form.idrendafamiliar.value='<?php echo $_POST['idrendafamiliar']?>';
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
  </script>
