<?php
require_once('../classes/adm_modulos.php');
$se = new Adm_modulos();


$se->consultar("select * from adm_modulos where idsistemas=".$_POST['idsistemas']." order by sigla_modulo, nome");
$linha=$se->Linha;
$resultado=$se->Result;


if($linha<=0){
   echo  '<option value="">'.htmlentities('Aguardando escolha de Sistema...').'</option>';
   
}else{
   	  echo '<option value="">Selecione o Módulo...</option>';
   for($i=0;$i<$linha;$i++){
      echo '<option value="'.mysql_result($resultado,$i,'idmodulos').'">'.utf8_encode(mysql_result($resultado,$i,'sigla_modulo')." - ".mysql_result($resultado,$i,'nome')).'</option>';
	  
   }
}

?>