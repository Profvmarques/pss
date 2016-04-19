<?php
require_once('controles/candidatos.php');
Processo('atualizaClassificacao2etapa');
?>

<form class="form-horizontal" id="form" name="form" method="post">
  <p>&nbsp;</p>
  <p align="center">
    <button type="button" class="btn btn-primary" onclick="validar(document.form);"> </i> ATUALIZAR CLASSIFICACAO</button>
    
    <input name="ok" type="hidden" id="ok"/>  
	
  </p>
</form>