<?php
require_once('controles/usuarios.php');
Processo('alterarsenha');
?>



<form class="form-horizontal" id="form" name="form" method="post">
<div class="container">
<div class="row-fluid">


<label class=" control-label" for="textinput">LOGIN:</label>
<strong><?php echo mysql_result($resultadoEditar,0,'login');?></strong></div>


<div class="row-fluid">


<label class=" control-label" for="textinput">PERFIL: </label>
<strong><?php echo mysql_result($resultadoEditar,0,'perfil.descricao');?></strong>
</div>

<div class="row-fluid">


<label class=" control-label" for="textinput">E-MAIL:</label>
<strong><?php echo @mysql_result($resultadoEditar,0,'email');?></strong></div>


<div class="row-fluid">


<label class=" control-label" for="textinput">SENHA: </label>
<input name="senha" type="password" class="form-control" id="senha" placeholder="" value="" title="O campo senha é obrigatório"/>
</div>


</br>

<div class="row-fluid">


<button type="button" class="btn btn-primary" onClick="validar(document.form);">
                              </i> SALVAR</button>
                                  <button type="button" class="btn" onclick="javascript:history.back()" >CANCELAR</button>
                               <input name="ok" type="hidden" id="ok"/>
                               
                               
                               

</div>
</div>
</form>