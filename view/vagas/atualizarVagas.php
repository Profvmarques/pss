<?php
require_once('controles/vagas.php');
Processo('atualizaVagas');
?>

<form class="form-horizontal" id="form" name="form" method="post">
  <p>&nbsp;</p>
  <p align="center">
    <button type="button" class="btn btn-primary" onclick="validar(document.form);"> </i> ATUALIZAR VAGAS</button>
    
    <input name="ok" type="hidden" id="ok"/>  
	
  </p>
</form>